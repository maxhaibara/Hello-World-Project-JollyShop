<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class ItemController extends Controller
{
	public function index() {
		$items=Item::paginate(5);
		return view('items/view',compact('items'));
	}
	public function show($id) {
		$items=Item::where('id','=',$id)->get();
		return view('items/view',compact('items'));
	}
    public function create() {
    	if (Auth::check()) {
    		return view('items/add');
    	}
    	else {
    		return redirect('/');
    	}
    }

    public function store(Request $request) {
    	$validator = Validator::make($request->all(), [
            'name'=>'required|max:255',
    		'description'=>'required|max:1023',
    		'price'=>'required|integer|min:0',
    		'stock'=>'required|integer|min:0'
        ]);
    	if ($validator->fails()) {
    		return redirect('/items/add')->withErrors($validator)->withInput();
    	}

    	Item::create($request->all());
    	return redirect('/items');
    }

    public function destroy($id) {
    	$item = Item::find($id);
    	$item->delete();
    	return redirect('items/');
    }
}
