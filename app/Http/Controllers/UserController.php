<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return view('admin.user.index',compact('user'));
    }
    
    public function profile(){
        $user = User::find(auth()->user()->id);
        return view('pages.user-page',compact('user'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/user/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request )
    {
        $validated = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
        ]);
        // $validated['pass'] = Hash::make($validated['pass']);
        User::create($request->all());
     
        return redirect()->route('useradmin.index')->with('success','user created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // return('halo');
        $user = User::find($id);
        return view('admin/user/edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user,string $id)
    {
        $user = User::find($id);
        $validated = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
        ]);
        $validated['password'] = Hash::make($validated['password']);
        
        $user->update($request->all());
    
        return redirect()->route('useradmin.index')->with('success','user updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user,string $id)
    {
        User::destroy($id);
        return redirect()->route('useradmin.index')->with('success','user deleted successfully');
        
    }
}

