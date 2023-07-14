<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = users ::all();
        return view('users.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        users::create([
            'user_id' => $request->user_id,
            'user_email' => $request->user_email,
            'user_noabsen' => $request->user_noabsen,
            'user_nama' => $request->user_nama
        ]);
        
        return redirect('users');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = users:: find($id);
        return view('users.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = users :: findOrFail($id);
        $row->update([
            'user_id' => $request->user_id,
            'user_email' => $request->user_email,
            'user_noabsen' => $request->user_noabsen,
            'user_nama' => $request->user_nama
        ]);

        return redirect('users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = users :: findOrFail($id);
        
        $row->delete(); 
        
        return redirect('users');
    }
}
