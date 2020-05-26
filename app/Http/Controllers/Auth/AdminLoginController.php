<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }
    public function ShowLoginForm()
    {
        return view('auth.admin-login');
    }
    public function Login(Request $request)
    {
        // validate the form data.
        $this->validate($request, [
        'email'     => 'required|email',
        'password'  => 'required|min:4'
        ]);
        //attempt to log the user in.
        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember_token))
        {
            return redirect()->intended(route('admin.dashboard'));
        }
        //if successful, then redirect to their inended location.
        
        //if unsuccssful, then redirect them to the login page.
        return redirect()->back()->withInput($request->only('email','remember'));
    }
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
    
}
