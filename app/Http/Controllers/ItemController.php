<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Line;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
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
        $items = Item::orderBy('item_id', 'asc')->get();
        return view('line_management.add_item', ['items' => $items]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'item_name' => 'required'
        ]);

        $item = Item::create([
            'item_name' => $request->item_name,
            'remark' => $request->note
        ]);
        if ($item == true) {
            return redirect('/item')->with('success', 'Item Added Successfully!');
        }
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'item_name' => 'required'
        ]);



        if (isset($request->checkstatus)) {
            $status = $request->checkstatus;
        } else {
            $status = 1;
        }

        $item = Item::where('item_id', '=', $request->id)->first();


        $item->update([
            'item_name' => $request->item_name,
            'remark' => $request->note,
            'active_status' =>  $status,
        ]);

        return redirect('/item')->with('success', 'Item Updated Successfully!');
    }

    public function delete($id)
    {
        $item = Item::where('item_id', '=', $id);
        $item->delete();

        return redirect('/item')->with('error', 'Item Deleted Successfully!');
    }
}
