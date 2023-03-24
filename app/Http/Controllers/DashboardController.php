<?php

namespace App\Http\Controllers;

use App\Models\Line;
use App\Models\Time;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
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

        $lines = Line::orderBy('l_id', 'DESC') // or DESC
            ->get();

        return view('main.dashboard', ['lines' => $lines]);
    }

    public function line($id)
    {

        $date = date("d.m.Y");

        // $line_name = Line::select('line.l_id as lid', 'line.l_name as lname', 'line_assign.assign_id as aid', 'line_assign.assign_date as lad', 'users.id as uid', 'users.name as un')
        //     ->join('line_assign', 'line_assign.l_id', '=', 'line.l_id')
        //     ->join('users', 'users.id', '=', 'line_assign.user_id')
        //     ->join('time', 'time.line_id', '=', 'line.l_id')
        //     ->where('line_assign.assign_date', '=', $date)
        //     ->first();


        $top_line = DB::table('time')
            ->select(
                'time.line_id',
                'line.l_name',
                'line_assign.main_target as m_target',
                'time.assign_id',
                DB::raw('SUM(time.actual_target_entry) as total_div_target'),
                DB::raw('SUM(time.div_actual_target) as total_actual_target'),
                DB::raw('ROUND((SUM(time.div_actual_target)*100/line_assign.main_target),0) as actual_target_percent'),
                DB::raw('ROUND((SUM(time.div_actual_target)*100/SUM(time.actual_target_entry)),0) as diff_target_percent'),
                DB::raw('ROW_NUMBER() OVER(ORDER BY  ROUND((SUM(time.div_actual_target)*100/SUM(time.actual_target_entry)),0) DESC
)AS row_num')
            )
            ->join('line_assign', 'line_assign.assign_id', '=', 'time.assign_id')
            ->join('line', 'line.l_id', '=', 'time.line_id')
            ->where('line_assign.assign_date', '=', $date)
            ->whereNotNull('time.div_actual_target')
            ->groupBy('time.line_id', 'time.assign_id', 'line_assign.main_target', 'line.l_name')
            ->get();

        return view('main.one_line', ['top_line' => $top_line, 'id' => $id]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
