<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Line;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BuyerController extends Controller
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
        $buyers = Buyer::orderBy('buyer_id', 'asc')->get();
        return view('line_management.add_buyer', ['buyers' => $buyers]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'buyer_name' => 'required'
        ]);

        $buyer = Buyer::create([
            'buyer_name' => $request->buyer_name,
            'remark' => $request->note
        ]);
        if ($buyer == true) {
            return redirect('/buyer')->with('success', 'Buyer Added Successfully!');
        }
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'buyer_name' => 'required'
        ]);



        if (isset($request->checkstatus)) {
            $status = $request->checkstatus;
        } else {
            $status = 1;
        }

        $buyer = Buyer::where('buyer_id', '=', $request->id)->first();


        $buyer->update([
            'buyer_name' => $request->buyer_name,
            'remark' => $request->note,
            'active_status' =>  $status,
        ]);

        return redirect('/buyer')->with('success', 'Buyer Updated Successfully!');
    }

    public function delete($id)
    {
        $buyer = Buyer::where('buyer_id', '=', $id);
        $buyer->delete();

        return redirect('/buyer')->with('error', 'Buyer Deleted Successfully!');
    }
}
