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

        $users = User::all();
        $lines = Line::all();
        return view('user_management.index', ['users' => $users, 'lines' => $lines]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role,
            'line_id' => $request->line,
            'remark' => $request->note,
        ]);
        if ($user == true) {
            return redirect('/user');
        }
    }

    public function edit($id)
    {
        $product = User::find($id);
        $users = User::all();
        $lines = Line::all();
        return view('user_management.index', ['users' => $users, 'lines' => $lines, 'product' => $product]);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);

        $user = User::where('id', '=', $request->uid)->first();

        var_dump($request->line);
        die();

        $user->update($request->all());

        return redirect('/user');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/user');
    }

    public function putUser()
    {
        $name = request()->get('name');
        $username = request()->get('username');
        $password = Hash::make(request()->get('password'));
        $password_2 = Hash::make(request()->get('password2'));
        $email = request()->get('email');
        $role = request()->get('role');
        $line_id = request()->get('line');
        $note = request()->get('note');
        $user_id = request()->get('id');

        if ($password_2 == "") {
            $sql = DB::update("UPDATE users SET name=?,username=?,password=?,email=?,role=?,line_id=?,remark=?,updated_at=? WHERE id=?", [$name, $username, $password, $email, $role, $line_id, $note, NOW(), $user_id]);
            DB::disconnect('musung');
        }
        if ($password_2 != "") {
            $sql = DB::update("UPDATE users SET name=?,username=?,password=?,email=?,role=?,line_id=?,remark=?,updated_at=? WHERE id=?", [$name, $username, $password_2, $email, $role, $line_id, $note, NOW(), $user_id]);
            DB::disconnect('musung');
        }

        return redirect('/member');
    }



    // public function undoUser()
    // {
    //     $id = request()->get('id');

    //     $request = Request::create(
    //         '/api/user_undo',
    //         'PUT',
    //         [
    //             'id' => request()->get('id'),
    //         ]
    //     );
    //     $response = Route::dispatch($request);

    //     return redirect('/member');
    // }
}
