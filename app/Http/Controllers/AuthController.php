<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('auth/login');
    }

    public function AUTHLogin(Request $req)
    {
        $credentials = $req->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $req->session()->regenerate();
 
            return redirect()->intended('index');
        }
 
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ])->onlyInput('username');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function regis()
    {
        return view('auht/regis');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function AUTHRegis(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'telp' => 'required',
            'password' => 'required',
        ]);
        $validated['password'] = Hash::make($validated['pass']);
        User::create($request->all());
     
        return redirect()->route('index')->with('success','user created successfully.');
    }
}
