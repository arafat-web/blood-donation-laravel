<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('admin.login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {

            if (Auth::user()->hasRole('admin')) {
                return redirect()->intended('admin/dashboard')
                    ->withSuccess('You have Successfully loggedin');
            } elseif (Auth::user()->hasRole('super_admin')) {
                return redirect()->intended('admin/dashboard')
                    ->withSuccess('You have Successfully loggedin');
            } elseif (Auth::user()->hasRole('user')) {
                return redirect()->intended('user/dashboard')
                    ->withSuccess('You have Successfully loggedin');
            }

        }

        return redirect('login')->withSuccess('Oppes! You have entered invalid credentials');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
