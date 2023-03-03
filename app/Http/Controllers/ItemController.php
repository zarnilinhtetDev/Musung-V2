<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Line;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $items = Item::all();
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
            $status = 0;
        }

        $item = Item::where('id', '=', $request->id)->first();


        $item->update([
            'item_name' => $request->item_name,
            'remark' => $request->note,
            'active_status' =>  $status,
        ]);

        return redirect('/item')->with('success', 'Item Updated Successfully!');
    }

    public function delete($id)
    {
        $item = Item::find($id);
        $item->delete();

        return redirect('/item')->with('error', 'Item Deleted Successfully!');
    }
}
