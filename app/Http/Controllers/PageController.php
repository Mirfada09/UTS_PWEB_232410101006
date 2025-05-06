<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login(Request $request)
    {
        $user = [
            'email' => 'yoana@example.com',
            'name' => 'yoana',
            'password' => '123',  
            'nomorTelepon' => '+6281234567890',  
        ];
    
        if ($request->input('email') == $user['email'] && $request->input('password') == $user['password']) {
            $request->session()->put('user', $user['email']);
            $request->session()->put('name', $user['name']);
            $request->session()->put('psw', $user['password']);
            $request->session()->put('tlpn', $user['password']);
            
            return redirect()->route('dashboard');
        }
    
        return back()->with('error', 'Invalid credentials! Please try again.');
    }
    
    function showLoginForm()
    {
        return view('login');
    }
    
}
