<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Str;

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
 
            if (Auth::check()) {
                $user = Auth::user();
                if ($user->role === 'admin') {
                    return redirect()->intended('/admin');
                } else {
                    return redirect()->route('index');
                }
            }
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
        return view('auth/regis');
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
            'alamat' => 'required',
            'password' => 'required',
        ]);
        $validated['password'] = Hash::make($validated['password']);
        User::create($request->all());
     
        return redirect()->intended('admin')->with('success','user created successfully.');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }
}
