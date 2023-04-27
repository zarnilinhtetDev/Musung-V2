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
        ini_set('max_execution_time', 300);

        $this->middleware('auth');

        $this->middleware(function ($request, $next) {
            $this->user = Auth::user(); // here the user should exist from the session
            return $next($request);
        });
    }


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

        return view('main.one_line', compact(
            'date',
            'id',
        ));
    }
}
