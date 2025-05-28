<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Pengguna;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
{
    $layanans = Layanan::paginate(10); // contoh pagination 10 per halaman
    return view('layanan.index', compact('layanans'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layanan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $request->validate([
        'layanan' => 'required|in:CuBer,CuAng,PaKap,CiLus',
        'harga' => 'required|integer',

        ]);

        Layanan::create($request->all());
        return redirect ()->route('layanan.index')
                        ->with('success','Layanan Berhasil Ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(layanan $layanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $layanan = layanan::findOrFail($id);
        return view ('layanan.edit', compact('layanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'layanan' => 'required',
            'harga'=> 'required|integer',

        ]);
        $layanan = layanan::findOrFail($id);
        $layanan->update($request->all());
        return redirect ()->route('layanan.index')
                        ->with('success','Layanan Berhasil DiUbah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $layanan =layanan::findOrFail($id);
        $layanan->delete();

        return redirect()->route('layanan.index')
                        ->with('success','Layanan Berhasil di Hapus');
    }
}
