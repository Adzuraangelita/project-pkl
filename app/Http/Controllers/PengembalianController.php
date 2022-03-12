<?php

namespace App\Http\Controllers;

use App\Models\pengembalian;
use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengembalian = Pengembalian::all();
        return view('pengembalian.index', compact('pengembalian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengembalian.create');
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
        'tgl_pengembalian' => 'required',
            'denda' => 'required',
            'id_buku' => 'required',
            'id_anggota' => 'required',
            'id_petugas' => 'required',
           
        ]);

        $pengembalian = new Pengembalian;
        $pengembalian->tgl_pengembalian = $request->tgl_pengembalian;
        $pengembalian->denda = $request->denda;
        $pengembalian->id_buku = $request->id_buku;
        $pengembalian->id_anggota = $request->id_anggota;
        $pengembalian->id_petugas = $request->id_petugas;
       
        $pengembalian->save();
        return redirect()->route('pengembalian.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pengembalian  $pengembalian
     * @return \Illuminate\Http\Response
     */
    public function show(pengembalian $pengembalian)
    {
        $pengembalian = Pengembalian::findOrFail($id);
        return view('pengembalian.show', compact('pengembalian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pengembalian  $pengembalian
     * @return \Illuminate\Http\Response
     */
    public function edit(pengembalian $pengembalian)
    {
        $pengembalian = Pengembalian::findOrFail($id);
        return view('pengembalian.edit', compact('pengembalian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pengembalian  $pengembalian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pengembalian $pengembalian)
    {
        $validated = $request->validate([
        'tgl_pengembalian' => 'required',
            'denda' => 'required',
            'id_buku' => 'required',
            'id_anggota' => 'required',
            'id_petugas' => 'required',
           
        ]);

        $pengembalian = new Pengembalian;
        $pengembalian->tgl_pengembalian = $request->tgl_pengembalian;
        $pengembalian->denda = $request->denda;
        $pengembalian->id_buku = $request->id_buku;
        $pengembalian->id_anggota = $request->id_anggota;
        $pengembalian->id_petugas = $request->id_petugas;
       
        $pengembalian->save();
        return redirect()->route('pengembalian.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pengembalian  $pengembalian
     * @return \Illuminate\Http\Response
     */
    public function destroy(pengembalian $pengembalian)
    {
        $pengembalian = Pengembalian::findOrFail($id);
        $pengembalian->delete();
        return redirect()->route('pengembalian.index');
    }
}
