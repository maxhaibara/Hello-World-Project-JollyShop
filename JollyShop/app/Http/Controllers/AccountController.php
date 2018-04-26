<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class AccountController extends Controller
{
    public function show() {
    	if (Auth::check()) {
    		$id=Auth::id();
	    	$user=User::find($id);
	    	return view('user.account',compact('user'));
    	}
    	else {
    		return redirect('/');
    	}
    }
}
