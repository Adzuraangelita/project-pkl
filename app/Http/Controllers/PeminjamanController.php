<?php

namespace App\Http\Controllers;

use App\Models\peminjaman;
use App\Models\buku;
use App\Models\anggota;
use App\Models\petugas;

use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjaman = Peminjaman::all();
        return view('peminjaman.index', compact('peminjaman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buku = buku::all();
        $anggota = anggota::all();
        $petugas = petugas::all();
        return view('peminjaman.create', compact('buku', 'anggota', 'petugas'));
    }

    public function cetakFrom() 
    {
        return view('peminjaman.cetak');
    }

    $cetak = peminjaman::whereDate('tanggal_pinjam', '>=', $tglawal)->whereDate('tanggal_pinjam', '>=', $tglakhir)->get();
    return view('peminjaman.cetak-pertanggal', compact('cetak'));
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required',
            'id_buku' => 'required',
            'id_anggota' => 'required',
            'id_petugas' => 'required',
           
        ]);

        $peminjaman = new Peminjaman;
        $peminjaman->tgl_pinjam = $request->tgl_pinjam;
        $peminjaman->tgl_kembali = $request->tgl_kembali;
        $peminjaman->id_buku = $request->id_buku;
        $peminjaman->id_anggota = $request->id_anggota;
        $peminjaman->id_petugas = $request->id_petugas;
       
        $peminjaman->save();
        return redirect()->route('peminjaman.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        return view('peminjaman.show', compact('peminjaman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        return view('peminjaman.edit', compact('peminjaman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required',
            'id_buku' => 'required',
            'id_anggota' => 'required',
            'id_petugas' => 'required',
           
        ]);

        $peminjaman = new Peminjaman;
        $peminjaman->tgl_pinjam = $request->tgl_pinjam;
        $peminjaman->tgl_kembali = $request->tgl_kembali;
        $peminjaman->id_buku = $request->id_buku;
        $peminjaman->id_anggota = $request->id_anggota;
        $peminjaman->id_petugas = $request->id_petugas;
       
        $peminjaman->save();
        return redirect()->route('peminjaman.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->delete();
        return redirect()->route('peminjaman.index');

    }
}
