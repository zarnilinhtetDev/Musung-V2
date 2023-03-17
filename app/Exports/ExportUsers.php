<?php

namespace App\Exports;

use App\Models\User;
use App\Models\Line;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Support\Facades\DB;


// class ExportUsers implements FromView
class ExportUsers implements FromView
{
    public function view(): View
    {
        // $user = User::select('name', 'username')
        //     ->orderBy('id', 'asc')
        //     ->get();

        // return $user;
        $users = User::orderBy('id', 'asc')->paginate(10);
        $lines = Line::orderBy('l_id', 'asc')->paginate(10);
        $admins = DB::table('users')
            ->where('role', '=', 0)
            ->orderBy('id', 'asc')
            ->paginate(10);

        $operators = DB::table('users')
            ->where('role', '=', 1)
            ->orderBy('id', 'asc')
            ->paginate(10);

        $managers = DB::table('users')
            ->where('role', '=', 2)
            ->orderBy('id', 'asc')
            ->paginate(10);

        $owners = DB::table('users')
            ->where('role', '=', 98)
            ->orderBy('id', 'asc')
            ->paginate(10);

        $viewers = DB::table('users')
            ->where(
                'role',
                '=',
                97
            )
            ->orderBy('id', 'asc')
            ->paginate(10);

        return view('user_management.index', ['users' => $users, 'lines' => $lines, 'admins' => $admins, 'operators' => $operators, 'managers' => $managers, 'owners' => $owners, 'viewers' => $viewers]);
    }
}
