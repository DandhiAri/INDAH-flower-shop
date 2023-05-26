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
        return view('admin/index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request )
    {
        $validated = $request->validate([
            'name' => 'required',
            'user' => 'required',
            'email' => 'required|email',
            'pass' => 'required',

        ]);
        $validated['pass'] = Hash::make($validated['pass']);
        User::create($request->all());
     
        return redirect()->route('index')->with('success','user created successfully.');
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
        return view('admin/edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user,string $id)
    {
        $user = User::find($id);
        $validated = $request->validate([
            'name' => 'required',
            'user' => 'required',
            'email' => 'required|email',
            'pass' => 'required',

        ]);
        $validated['pass'] = Hash::make($validated['pass']);
        
        $user->update($request->all());
    
        return redirect()->route('admin.index')->with('success','user updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user,string $id)
    {
        User::destroy($id);
        return redirect()->route('admin.index')->with('success','user deleted successfully');
        
    }
}

