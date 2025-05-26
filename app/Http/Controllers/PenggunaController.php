<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Hash;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengguna = pengguna::all();
        return view('pengguna',compact('pengguna'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,

        ]);

        return redirect()->route('pengguna.index')->with('Success','Pengguna Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengguna $Pengguna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request$request,Pengguna $Pengguna)
    {
        
        return view('Pengguna.edit',compact ('Pengguna'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengguna $Pengguna)
    {
        $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:Pengguna,email,'. $Pengguna->id,
        'role' => 'required|in:admin,staff,Pelanggan',

        ]);

        $Pengguna->update( [
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,

        ]);

        return redirect()->route('Pengguna.index')->with('Success','Pengguna Berhasil DiUbah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengguna $Pengguna)
    {
        $Pengguna->delete();
        return redirect()->route('Pengguna.index')->with('Success','Pengguna Berhasil DiHapus');
    }
}
