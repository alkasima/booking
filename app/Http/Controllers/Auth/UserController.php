<?php

namespace App\Http\Controllers\Auth;

use App\Models\Auth\User;
use Tymon\JWTAuth\JWTAuth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Exceptions\JWTException;

class UserController extends Controller
{
    
    public function register(Request $request)
    {
        $this->validate($request, [
            'u_fname' => 'required|string|min:2',
            'u_lname' => 'required|string',
            'u_phone' => 'required|string',
            'u_address' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $user = new User([
            'u_fname' => $request->u_fname,
            'u_lname' => $request->u_lname,
            'u_phone' => $request->u_phone,
            'u_address' => $request->u_address,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        $user->save();

        $request->session()->flash('success', 'Registered successfully');

        return redirect()->route('login');
    }

    
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $token = JWTAuth::fromUser(Auth::user());
            // Store the token in a session or cookie for subsequent requests
            return redirect('/')->with('token', $token);
        }

        return redirect('/login')->with('error', 'Invalid credentials');
    }
}
