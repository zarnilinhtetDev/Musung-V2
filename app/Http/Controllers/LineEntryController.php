<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class LineEntryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $items = Item::all();
        return view('line_entry.index', ['items' => $items]);
    }

    public function line_entry(string $id)
    {
        $items = Item::all();
        return view('line_entry.line_entry', ['items' => $items]);
    }
}
