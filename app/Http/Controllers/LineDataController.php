<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Item;
use App\Models\Line;
use App\Models\LineAssign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


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

        $line_assign_status = DB::table('line_assign')
            ->join('line', 'line.l_id', '=', 'line_assign.l_id')
            ->select('line_assign.assign_id', 'line.l_id', 'line_assign.assign_date', 'line.a_status')
            ->orderBy('line_assign.assign_id', 'asc')
            ->get();

        $line_assign_detail = DB::table('line_assign')
            ->join('line', 'line.l_id', '=', 'line_assign.l_id')
            ->join('users as u1', 'u1.id', '=', 'line_assign.user_id')
            // ->join('users as u2', 'line_data.assign_date', '=', $date_string)
            ->select('line_assign.*', 'line.*', 'u1.*')
            ->orderBy('line.l_pos', 'asc')
            ->get();

        return view('line_management.add_line_data', ['lines' => $lines, 'line_data' => $line_data, 'line_assign_status' => $line_assign_status,  'line_assign_detail' => $line_assign_detail, 'buyers' => $buyers, 'items' => $items]);
    }

    public function store()
    {
        $l_id = request()->post('l_id');
        $line_manager = request()->post('l_manager');
        $s_time = request()->post('start_time');
        $e_time = request()->post('end_time');
        $work_hour = request()->post('work_hour');
        $lunch_start = request()->post('lunch_start');
        $lunch_end = request()->post('lunch_end');
        $progress = request()->post('progress');
        $category = request()->post('category');
        $style_name = request()->post('style_name');
        $p_name = request()->post('p_name');

        $category = [];
        $style_no = [];
        $p_name = [];
        $category_target = [];
        $buyer_name_list_arr = [];
        $style_name_list_arr = [];

        // for ($x = 0; $x < count($sub); $x++) {
        //     $category_select = $sub[$x]['category_select'];
        //     $p_name_post = $sub[$x]['p_name'];

        //     if (is_numeric($category_select)) {
        //         $category[] = $category_select;
        //     } elseif (!is_numeric($category_select)) {
        //         $category_select_format = str_replace(' ', '', strtolower($category_select));;

        //         $buyer_name_check = BuyerList::select('buyer_id', 'buyer_name')->get();

        //         for ($h = 0; $h < count($buyer_name_check); $h++) {
        //             $buyer_name_list = str_replace(' ', '', strtolower($buyer_name_check[$h]['buyer_name']));
        //             $buyer_name_list_arr[] = $buyer_name_list;
        //         }

        //         if (!in_array($category_select_format, $buyer_name_list_arr)) {
        //             $buyer_create = BuyerList::create([
        //                 'buyer_name' => $category_select,
        //             ]);

        //             if ($buyer_create) {
        //                 $buyer_id = BuyerList::select('buyer_id')->where('buyer_name', $category_select)->first();
        //             }
        //             $category[] = $buyer_id->buyer_id;
        //         }
        //     }

        //     if (is_numeric($p_name_post)) {
        //         $p_name[] = $p_name_post;
        //     } elseif (!is_numeric($p_name_post)) {
        //         $p_name_post_format = str_replace(' ', '', strtolower($p_name_post));;

        //         $style_name_check = ItemList::select('item_id', 'item_name')->get();

        //         for ($g = 0; $g < count($style_name_check); $g++) {
        //             $style_name_list = str_replace(' ', '', strtolower($style_name_check[$g]['item_name']));
        //             $style_name_list_arr[] = $style_name_list;
        //         }

        //         if (!in_array($p_name_post_format, $style_name_list_arr)) {
        //             $item_create = ItemList::create([
        //                 'item_name' => $p_name_post,
        //             ]);

        //             if ($item_create) {
        //                 $item_id = ItemList::select('item_id', 'item_name')->where('item_name', $p_name_post)->first();
        //             }
        //             $p_name[] = $item_id->item_id;
        //         }
        //     }

        //     $style_no[] = $sub[$x]['style_no'];
        //     $category_target[] = $sub[$x]['category_target'];
        // }
    }

    public function delete($id)
    {
        $line = LineAssign::find($id);
        $line->delete();

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
        var_dump($response);
        die();
        // return response()->json($response);
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
