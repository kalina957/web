<?php

namespace App\Http\Controllers;

use App\User;
use App\Item;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $items = Item::all()->toArray();
        return view('home', compact('items'));

    }

    public function create()
    {
        return view('item.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'itemName' => 'required',
            'description' => 'required',
            'price' => 'required',
            'amount' => 'required'

        ]);
        $item = new Item([
            'itemName' => $request->get('itemName'),
            'description' => $request->get('description'),
            'price' => $request->get('price'),
            'amount' => $request->get('amount')

        ]);
        $item->save();
        return redirect()->route('item.index');
    }

    public function show($id)
    {
        //
        //$item = Item::where('id', $id)->firstOrFail;
        $item = Item::find($id);
        return view('item.details', compact('item'));
    }

    public function edit($id)
    {
        //
        $item = Item::find($id);
        return view('item.edit', compact('item', 'id'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {

    }


}
