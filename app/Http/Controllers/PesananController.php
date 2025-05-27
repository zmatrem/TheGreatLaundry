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
    $pesanans = Pesanan::paginate(10); // contoh pagination 10 per halaman
    return view('pesanan.index', compact('pesanans'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pesanan.create');
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

        pesanan::create($request->all());
        return redirect ()->route('pesanan.index')
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
        $pesanan = Pesanan::findOrFail($id);
        return view ('pesanan.edit', compact('pesanan'));
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

        $pesanan = Pesanan::findOrFail($id);
        $pesanan->update($request->all());
        return redirect ()->route('pesanan.index')
                        ->with('success','Pesanan Berhasil DiUbah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pesanan =Pesanan::findOrFail($id);
        $pesanan->delete();

        return redirect()->route('pesanan.index')
                        ->with('success','Pesanan Berhasil di Hapus');
    }
}
