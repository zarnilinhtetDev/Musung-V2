<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Line;
use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $buyers = Buyer::all();
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
            $status = 0;
        }

        $buyer = Buyer::where('id', '=', $request->id)->first();


        $buyer->update([
            'buyer_name' => $request->buyer_name,
            'remark' => $request->note,
            'active_status' =>  $status,
        ]);

        return redirect('/buyer')->with('success', 'Buyer Updated Successfully!');
    }

    public function delete($id)
    {
        $buyer = Buyer::find($id);
        $buyer->delete();

        return redirect('/buyer')->with('error', 'Buyer Deleted Successfully!');
    }
}
