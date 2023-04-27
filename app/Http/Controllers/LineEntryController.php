<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Line;
use App\Models\LineAssign;
use App\Models\ProductDetail;
use App\Models\Time;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LineEntryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware(function ($request, $next) {
            $this->user = Auth::user(); // here the user should exist from the session
            return $next($request);
        });
    }

    public function index()
    {
        $date = date("d.m.Y");

        $lines = LineAssign::select('line.l_id as lid', 'user_id as uid', 'users.name as uname', 'line.l_name as lname', 'line_assign.main_target as mtarget')
            ->join('line', 'line.l_id', '=', 'line_assign.l_id')
            ->join('users', 'users.id', '=', 'line_assign.user_id')
            ->where('line_assign.assign_date', $date)
            ->get();

        return view('line_entry.index', ['lines' => $lines]);
    }

    public function line_entry(string $id)
    {
        $date = date("d.m.Y");
        // $u_id = Auth::user()->id;

        $line = Line::select('users.*', 'line.*', 'line.l_id as lid', 'line_assign.*', 'line_assign.assign_id as aid')
            ->join('line_assign', 'line.l_id', '=', 'line_assign.l_id')
            ->join('users', 'users.id', '=', 'line_assign.user_id')
            ->where('users.id', $id)
            ->where('line_assign.assign_date', $date)
            ->first();

        $time = Time::select('time.*', 'line_assign.user_id as uid')
            ->join('line_assign', 'line_assign.assign_id', '=', 'time.assign_id')
            ->where('time.line_id', $line->lid)
            ->where('line_assign.assign_id', $line->aid)
            ->orderBy('time.time_id', 'asc')
            ->get();

        $item = ProductDetail::select('p_detail.*')
            ->where('l_id', $line->lid)
            ->where('assign_id', $line->aid)
            ->get();

        return view('line_entry.line_entry', ['line' => $line, 'user_id' => $id, 'date' => $date, 'times' => $time, 'items' => $item]);
    }

    public function line_target_entry(Request $request)
    {
        // $u_id = Auth::user()->id;

        $this->validate($request, [
            'target' =>  ['required'],
            'p_detail_actual_target' => ['required'],
        ]);

        $percentage = round(($request->p_detail_actual_target / $request->target) * 100);
        $u_id = $request->uid;

        $time = Time::where('time_id', $request->tid)
            ->update(['status' => 1, 'div_actual_target' => $request->p_detail_actual_target, 'div_actual_percent' => $percentage]);

        if ($time == true) {
            return redirect('/line_entry/' . $u_id)->with('success', 'Target Added Successfully!');
        }
    }
}
