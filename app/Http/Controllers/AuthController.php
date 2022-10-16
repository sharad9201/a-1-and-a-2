<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }
    public function login(AuthRequest $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('posts.index');
        } else {
            return redirect()->route('user.form')->with('danger', 'Login Failed!');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('user.form')->with('success', 'Logout Successfully!');
    }
}
