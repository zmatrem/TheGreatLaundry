<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $pesanan = pesanan::all();
        return view('pesanan',compact('pesanan'));  
      }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Pesanan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(request $request)
    {
      $request->validate([
        'nama'=> 'required',
            'layanan' => 'required',
            'status'=> 'required',

        ]);

        Pesanan::create($request->all());
        return redirect ()->route('Pesanan.index')
                        ->with('success','Pesanan Berhasil Ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pesanan $pesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    Public function edit($id)
    {
        $Pesanan = Pesanan::findOrFail($id);
        return view ('Pesanan.edit', compact('Pesanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
      $request->validate([
            'nama'=> 'required',
            'layanan' => 'required',
            'status'=> 'required',

        ]);

        $Pesanan = Pesanan::findOrFail($id);
        $Pesanan->update($request->all());
        return redirect ()->route('Pesanan.index')
                        ->with('success','Pesanan Berhasil DiUbah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Pesanan =Pesanan::findOrFail($id);
        $Pesanan->delete();

        return redirect()->route('Pesanan.index')
                        ->with('success','Pesanan Berhasil di Hapus');
    }
}
