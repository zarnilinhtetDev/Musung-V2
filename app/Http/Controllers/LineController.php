<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Line;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LineController extends Controller
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
        $lines = Line::orderBy('l_pos', 'asc')->get();
        return view('line_management.add_new_line', ['lines' => $lines]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'line_name' => 'required',
            'position_name' => 'required',
        ]);

        $user = Line::create([
            'l_name' => $request->line_name,
            'l_pos' => $request->position_name
        ]);
        if ($user == true) {
            // session()->flash('msg', 'Line Added Successfully!');
            return redirect('/line')->with('success', 'Line Added Successfully!');
        }
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'line_name' => 'required',
            'position_name' => 'required',
        ]);


        if (isset($request->checkstatus)) {
            $status = $request->checkstatus;
        } else {
            $status = 1;
        }

        $line = Line::where('l_id', '=', $request->lid)->first();


        $line->update([
            'l_name' => $request->line_name,
            'l_pos' => $request->position_name,
            'a_status' =>  $status,
        ]);

        return redirect('/line')->with('success', 'Line Updated Successfully!');
    }

    public function delete($id)
    {
        $line = Line::find($id);
        $line->delete();

        return redirect('/line')->with('error', 'Line Deleted Successfully!');
    }
}
