<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Item;
use App\Models\Line;
use App\Models\LineAssign;
use App\Models\ProductDetail;
use App\Models\Time;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use DateTime;
use DateInterval;
use DatePeriod;
use Illuminate\Http\JsonResponse;

class LineDataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware(function ($request, $next) {
            $this->user = Auth::user(); // here the user should exist from the session
            return $next($request);
        });
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $date_string = date("d.m.Y");

        $lines = Line::select('l_id', 'l_name', 'l_pos', 'a_status', 'is_delete')
            ->where('is_delete', 0)
            ->orderBy('l_pos', 'asc')
            ->get();

        $line_data = LineAssign::all();

        $buyers = Buyer::all();

        $items = Item::all();

        $users = DB::table('users')
            ->select('id', 'name')
            ->where('role', 2)
            ->whereNotIn('id', function ($q) {
                $q->select('user_id')
                    ->from('line_assign')
                    ->where('assign_date', '=', date("d.m.Y"))
                    ->get();
            })
            ->orderBy('id', 'asc')
            ->get();


        $line_assign_status = DB::table('line_assign')
            ->join('line', 'line.l_id', '=', 'line_assign.l_id')
            ->select('line_assign.assign_id', 'line.l_id', 'line_assign.assign_date', 'line.a_status')
            ->orderBy('line_assign.assign_id', 'asc')
            ->get();

        $line_assign_detail = DB::table('line_assign')
            ->join('line', 'line.l_id', '=', 'line_assign.l_id')
            ->join('users as u1', 'u1.id', '=', 'line_assign.user_id')
            ->select('line_assign.*', 'line.*', 'u1.*')
            ->where('line_assign.assign_date', $date_string)
            ->orderBy('line.l_pos', 'asc')
            ->get();

        // $t_hours = Time::select(DB::raw('COUNT(time_id) as t_count'))
        //     ->where('assign_date', $date_string)
        //     ->groupBy('line_id')
        //     ->orderBy('line_id', 'asc')
        //     ->get();

        return view('line_management.add_line_data', ['lines' => $lines, 'line_data' => $line_data, 'line_assign_status' => $line_assign_status,  'line_assign_detail' => $line_assign_detail, 'buyers' => $buyers, 'items' => $items, 'users' => $users]);
    }

    public function store(Request $request)
    {

        $date =  date("d.m.Y");
        $uid = Auth::user()->id;

        $category = [];
        $category_target = $request->category_target;
        $number = count($category_target);
        $total_category_target =  array_sum($category_target);


        if ($number > 0) {
            $style_name = $request->style_name;
            $item_select = $request->item_select;
            $buyer_select = $request->buyer_select;

            $minute = date("H:i", $request->progress * 60);
            $from_time = strtotime($request->start_time);
            $to_time = strtotime($request->end_time);
            $lunch_from_time = strtotime($request->lunch_start);
            $lunch_to_time = strtotime($request->lunch_end);

            $begin_from_time = date('H:i', $from_time);
            $end_to_time = date('H:i', $to_time);
            $begin_lunch_from_time = date('H:i', $lunch_from_time);
            $end_lunch_to_time = date('H:i', $lunch_to_time);

            $begin = new DateTime($begin_from_time);
            $end_time = new DateTime($end_to_time);
            $lunch_begin = new DateTime($begin_lunch_from_time);
            $lunch_end = new DateTime($end_lunch_to_time);

            $interval = DateInterval::createFromDateString($request->progress . ' min');
            $times = new DatePeriod($begin, $interval, $lunch_begin);

            foreach ($times as $time) {
                $timeArr[] = $time->add($interval)->format('H:i');
            }

            $endOfArray = end($timeArr);
            $endOfArray_to_date = date('H:i', strtotime($endOfArray));

            if ($endOfArray_to_date > $begin_lunch_from_time) { ///// Pop last item if greater than lunch_start_time
                array_pop($timeArr);
            }
            $num_TimeArray = count($timeArr);

            //// loop for Lunch End Time to End Time
            $total_time = strtotime($endOfArray_to_date) + strtotime($minute) + ($lunch_to_time - $lunch_from_time);
            $lunch_end_time =  date('H:i', $total_time);
            $lunch_end_time_to_period = new DateTime($lunch_end_time);

            $cal_end_time = new DatePeriod($lunch_end_time_to_period, $interval, $end_time);

            $endTimeArr[] = $lunch_end_time;
            foreach ($cal_end_time as $cal) {
                $endTimeArr[] = $cal->add($interval)->format('H:i');
            }

            $endOfEndTimeArr = end($endTimeArr);
            $endOfEndTimeArr_to_date = date('H:i', strtotime($endOfEndTimeArr));

            $num_EndTimeArray = count($endTimeArr);

            if ($endOfEndTimeArr > $end_time->format('H:i')) {
                array_pop($endTimeArr);
                $getMinuteEndTimeArr = (strtotime($endOfEndTimeArr) - $to_time) / 60;
                $diffEndTime = strtotime($endOfEndTimeArr) - strtotime(date("H:i", $getMinuteEndTimeArr * 60));
                $diffEndTime_to_date =  date("H:i", $diffEndTime);
                $endTimeArr[] = $diffEndTime_to_date;
            }

            // Divide total target by all time counts
            if ($request->lunch_start == $request->end_time) {
                $totalTimeArr = $timeArr;
                $total_division = round(($total_category_target / $num_TimeArray), 0);
            } else {
                $totalTimeArr = array_merge($timeArr, $endTimeArr);
                $countTotalTimeArr = count($totalTimeArr);
                $total_division = round(($total_category_target / $countTotalTimeArr), 0);
            }

            // $total_division = round(($total_category_target / $countTotalTimeArr), 0);

            $total_division_2 = $total_division;
            $total_division_3 = $total_division;

            $num_1 = 0;
            $num_2 = 0;

            // while ($num_1 < $countTotalTimeArr) {
            //     $div_target[] = $total_division;
            //     $total_division += $total_division_2;
            //     $num_1++;
            // }
            // $end_div_target = end($div_target);

            // if ($end_div_target > $total_category_target) {
            //     array_pop($div_target);
            //     $div_target[] = $total_category_target;
            // }


            // while ($num_2 < $countTotalTimeArr) {
            //     $target_for_line_entry[] = $total_division_3;
            //     $num_2++;
            // }

            if ($request->lunch_start == $request->end_time) {
                $t_hours = $num_TimeArray;

                while ($num_1 < $num_TimeArray) {
                    $div_target[] = $total_division;
                    $total_division += $total_division_2;
                    $num_1++;
                }
                $end_div_target = end($div_target);

                if ($end_div_target > $total_category_target) {
                    array_pop($div_target);
                    $div_target[] = $total_category_target;
                }


                while ($num_2 < $num_TimeArray) {
                    $target_for_line_entry[] = $total_division_3;
                    $num_2++;
                }
            } else {
                $t_hours = $countTotalTimeArr;

                while ($num_1 < $countTotalTimeArr) {
                    $div_target[] = $total_division;
                    $total_division += $total_division_2;
                    $num_1++;
                }
                $end_div_target = end($div_target);

                if ($end_div_target > $total_category_target) {
                    array_pop($div_target);
                    $div_target[] = $total_category_target;
                }


                while ($num_2 < $countTotalTimeArr) {
                    $target_for_line_entry[] = $total_division_3;
                    $num_2++;
                }
            }

            // Insert data into line_assign table
            $data = LineAssign::create([
                'user_id' => $request->line_manager,
                'l_id' => $request->l_id,
                'main_target' => $total_category_target,
                's_time' => $request->start_time,
                'e_time' => $request->end_time,
                'lunch_s_time' => $request->lunch_start,
                'lunch_e_time' => $request->lunch_end,
                'cal_work_min' => $request->progress,
                't_work_hr' => $t_hours,
                'assign_date' => $date
            ])->get()->last();

            $assign_id = $data['assign_id'];

            // Insert data in time table
            if ($t_hours > 0) {
                for ($j = 0; $j < count($totalTimeArr); $j++) {
                    Time::create([
                        'time_name' => $totalTimeArr[$j],
                        'line_id' => $request->l_id,
                        'assign_id' => $assign_id,
                        'div_target' => $div_target[$j],
                        'actual_target_entry' => $target_for_line_entry[$j],
                        'assign_date' => $date,
                    ]);
                }
            }

            //Insert p_detail table
            for ($i = 0; $i < count($item_select); $i++) {
                $time_count = DB::table('time')
                    ->select('assign_id', 'time_name')
                    ->where('assign_id', '=', $assign_id)
                    ->orderBy('time_name', 'desc')
                    ->get();
                $time_count_decode = json_decode(json_encode($time_count), true);
                $count_time = count($time_count_decode);

                $div_target_quantity = round(($category_target[$i] / $count_time), 0);

                ProductDetail::create([
                    'assign_id' => $assign_id,
                    'l_id' => $request->l_id,
                    'p_cat_id' => $buyer_select[$i],
                    'p_name' => $item_select[$i],
                    'style_no' => $style_name[$i],
                    'quantity' => $category_target[$i],
                    'div_quantity' => $div_target_quantity
                ]);
            }
        }

        return response()->json(['success' => 'Product saved successfully.']);
    }



    public function delete($id)
    {
        $line = LineAssign::find($id);
        $line->delete();

        $time = Time::where('assign_id', '=', $id);
        $time->delete();

        $p_detail = ProductDetail::where('assign_id', '=', $id);
        $p_detail->delete();

        return redirect('/line_data')->with('error', 'Line Deleted Successfully!');
    }

    public function buyerSearch(Request $request)
    {
        $buyer_search = $request->search;

        if ($buyer_search == '') {
            $buyers = Buyer::orderby('buyer_name', 'asc')->select('buyer_id', 'buyer_name')->limit(10)->get();
        } else {
            $buyers = Buyer::orderby('buyer_name', 'asc')->select('buyer_id', 'buyer_name')->where('buyer_name', 'ILIKE', '%' . $buyer_search . '%')->limit(10)->get();
        }

        $response = array();
        foreach ($buyers as $buyer) {
            $response[] = array(
                "id" => $buyer->buyer_id,
                "text" => $buyer->buyer_name
            );
        }

        return response()->json($response);
    }

    public function itemSearch(Request $request)
    {
        $item_search = $request->search;

        if ($item_search == '') {
            $items = Item::orderby('item_name', 'asc')->select('item_id', 'item_name')->limit(10)->get();
        } else {
            $items = Item::orderby('item_name', 'asc')->select('item_id', 'item_name')->where('item_name', 'ILIKE', '%' . $item_search . '%')->limit(10)->get();
        }

        $response = array();
        foreach ($items as $item) {
            $response[] = array(
                "id" => $item->item_id,
                "text" => $item->item_name
            );
        }
        return response()->json($response);
    }
}
