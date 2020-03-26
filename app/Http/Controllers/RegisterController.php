<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Validator;



class RegisterController extends Controller
{
	//
	public function homeindex()
    {
     return view('homepage');
    }
	public function index()
    {
     return view('login');
	}
	
    public function checklogin(Request $request)
    {
		$this->validate($request, [
		'email'   => 'required|email',
		'password'  => 'required|alphaNum|min:3'
		]);

		$user_data = array(
		'email'  => $request->get('email'),
		'password' => $request->get('password')
		);

		if(Auth::attempt($user_data))
		{
        	return redirect('main/successlogin');
		}
		else
		{
			return back()->with('error', 'Wrong Login Details');
		}
    }
    public function successlogin()
    {
     	return view('successlogin');
    }
    public function logout()
    {
		Auth::logout();
		return redirect('main');
    }
    public function store(Request $request)
    {
    	$this->validate($request, [
    		'name'=>'required',
    		'email'=>'required',
    		'password'=>'required|min:6',
    		'cpassword'=>'required|same:password',
    		'address'=>'required'
    	]);
    	$users = new User ;
    	$users->name = $request->input('name');
    	$users->email = $request->input('email');
    	$users->password = Hash::make($request->input('password'));
    	$users->cpassword = Hash::make($request->input('cpassword'));
    	$users->address = $request->input('address');
		$users->save();

		
		return redirect('homepage');
    }
}