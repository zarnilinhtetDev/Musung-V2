<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Line;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserManagementController extends Controller
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

        $users = User::orderBy('id', 'asc')->get();
        $lines = Line::orderBy('l_id', 'asc')->get();
        $admins = DB::table('users')
            ->where('role', '=', 0)
            ->orderBy('id', 'asc')
            ->get();

        $operators = DB::table('users')
            ->where('role', '=', 1)
            ->orderBy('id', 'asc')
            ->get();

        $managers = DB::table('users')
            ->where('role', '=', 2)
            ->orderBy('id', 'asc')
            ->get();

        $owners = DB::table('users')
            ->where('role', '=', 98)
            ->orderBy('id', 'asc')
            ->get();

        $viewers = DB::table('users')
            ->where('role', '=', 97)
            ->orderBy('id', 'asc')
            ->get();

        return view('user_management.index', ['users' => $users, 'lines' => $lines, 'admins' => $admins, 'operators' => $operators, 'managers' => $managers, 'owners' => $owners, 'viewers' => $viewers]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'username' =>  ['required'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password' => ['required'],
            'role' =>  ['required']
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make(
                $request->password
            ),
            'role' => $request->role,
            'active_status' => 1,
            'line_id' => $request->line,
            'remark' => $request->note,
        ]);
        if ($user == true) {
            return redirect('/user')->with('success', 'User Added Successfully!');
        }
    }


    public function update(Request $request)
    {

        $this->validate($request, [
            'name' => ['required'],
            'username' =>  ['required'],
            // 'email' => ['required'],
            'role' =>  ['required']
        ]);


        if (isset($request->password2)) {
            $password = $request->password2;
        } else {
            $password = $request->password1;
        }

        if (isset($request->checkstatus)) {
            $status = $request->checkstatus;
        } else {
            $status = 0;
        }

        $user = User::where('id', '=', $request->uid)->first();


        $user->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($password),
            'role' => $request->role,
            'line_id' => $request->line,
            'remark' => $request->note,
            'active_status' =>  $status,
        ]);

        return redirect('/user')->with('success', 'User Updated Successfully!');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/user')->with('error', 'User Deleted Successfully!');
    }
}
