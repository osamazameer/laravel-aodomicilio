<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    // GET Requests -> Shows the login form
    public function index() 
    {
        return view('auth.login');
    }

    // POST Request -> authenticates the user
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        


        if(!Auth::attempt($credentials))
        {
            return back()->with('status', 'Invalid login details');
        }
        return redirect()->route('home');
    }

    // POST Request -> logs user out
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
