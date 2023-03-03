<?php

namespace App\Http\Controllers;

use App\Models\Line;
use App\Models\LineData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use voku\helper\ASCII;

class LineDataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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

        $line_data = LineData::all();


        $line_assign_status = DB::table('line_data')
            ->join('line', 'line.l_id', '=', 'line_data.l_id')
            ->select('line_data.id', 'line.l_id', 'line_data.assign_date', 'line.a_status')
            ->orderBy('line_data.id', 'asc')
            ->get();

        $line_assign_detail = DB::table('line_data')
            ->join('line', 'line.l_id', '=', 'line_data.l_id')
            ->join('users as u1', 'u1.id', '=', 'line_data.user_id')
            // ->join('users as u2', 'line_data.assign_date', '=', $date_string)
            ->select('line_data.*', 'line.*', 'u1.*')
            ->orderBy('line.l_pos', 'asc')
            ->get();

        return view('line_management.add_line_data', ['lines' => $lines, 'line_data' => $line_data, 'line_assign_status' => $line_assign_status,  'line_assign_detail' => $line_assign_detail]);
    }

    public function delete($id)
    {
        $line = LineData::find($id);
        $line->delete();

        return redirect('/line_data')->with('error', 'Line Deleted Successfully!');
    }
}
