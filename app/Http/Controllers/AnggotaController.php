<?php

namespace App\Http\Controllers;

use App\Models\anggota;
use App\Models\buku;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggota = anggota::with('peminjaman')->get();
        return view('anggota.index', compact('anggota'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $anggota = buku::all();
        return view('anggota.create', compact('anggota'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_anggota' => 'required',
            'nama_anggota' => 'required',
            'jk_anggota' => 'required',
            'jurusan_anggota' => 'required',
            'no_telp_anggota' => 'required',
            'alamat_anggota' => 'required',
        ]);

        $anggota = new anggota;
        $anggota->kode_anggota = $request->kode_anggota;
        $anggota->nama_anggota= $request->nama_anggota;
        $anggota->jk_anggota = $request->jk_anggota;
        $anggota->jurusan_anggota= $request->jurusan_anggota;
        $anggota->no_telp_anggota = $request->no_telp_anggota;
        $anggota->alamat_anggota = $request->alamat_anggota;
        $anggota->save();
        return redirect()->route('anggota.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $anggota = anggota::findOrFail($id);
        return view('anggota.show', compact('anggota'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anggota = anggota::findOrFail($id);
        return view('anggota.edit', compact('anggota'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'kode_anggota' => 'required',
            'nama_anggota' => 'required',
            'jk_anggota' => 'required',
            'jurusan_anggota' => 'required',
            'no_telp_anggota' => 'required',
            'alamat_anggota' => 'required',
        ]);

        $anggota = anggota::findOrFail($id);
        $anggota->kode_anggota = $request->kode_anggota;
        $anggota->nama_anggota= $request->nama_anggota;
        $anggota->jk_anggota = $request->jk_anggota;
        $anggota->jurusan_anggota= $request->jurusan_anggota;
        $anggota->no_telp_anggota = $request->no_telp_anggota;
        $anggota->alamat_anggota = $request->alamat_anggota;
        $anggota->save();
        return redirect()->route('anggota.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $anggota = anggota::findOrFail($id);
        $anggota->delete();
        return redirect()->route('anggota.index');

    }
}
