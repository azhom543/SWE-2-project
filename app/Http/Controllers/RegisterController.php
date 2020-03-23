<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;

class RegisterController extends Controller
{
    //
    public function store(Request $request)
    {
    	$this->validate($request, [
    		'name'=>'required',
    		'email'=>'required',
    		'password'=>'required|min:6',
    		'cpassword'=>'required|same:password',
    		'address'=>'required'

    	]);

    	$candidates = new Candidate ;
    	$candidates->name = $request->input('name');
    	$candidates->email = $request->input('email');
    	$candidates->password =$request->input('password');
    	$candidates->cpassword = $request->input('cpassword');
    	$candidates->address = $request->input('address');

    	$candidates->save();
    	


    }
}