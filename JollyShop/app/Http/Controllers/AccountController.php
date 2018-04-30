<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Validator;

class AccountController extends Controller
{
    public function index() {
    	if (Auth::check()) {
    		$id=Auth::id();
	    	$user=User::find($id);
	    	return view('user.account',compact('user'));
    	}
    	else {
    		return redirect('/');
    	}
    }

    public function balance() {
        if (Auth::check()) {
            $id=Auth::id();
            $user=User::find($id);
            return view('user.balance',compact('user'));
        }
        else {
            return redirect('/');
        }
    }

    // public function store(Request $request) {
    //     $validator = Validator::make($request->all(), [
    //         'topup' => 'required'
    //     ]);
    //     if ($validator->fails()) {
    //         return redirect('/account/balance')->withErrors($validator)->withInput();
    //     }

    //     // User::create($request->all());

    //     return redirect('/account');
    // }

    public function update(Request $request) {
        // dd($request->topup);
        $validator = Validator::make($request->all(), [
            'topup' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('/account/balance')->withErrors($validator)->withInput();
        }
        else {
            $id=Auth::id();
            $user = User::find($id);
            $user->balance += $request->topup;
            $user->save();
            return redirect('account');
        }
    }

}
