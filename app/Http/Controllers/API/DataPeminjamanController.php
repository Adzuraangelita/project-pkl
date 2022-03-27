<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\peminjaman;
use Illuminate\Http\Request;

class DataPeminjamanController extends Controller
{

    public function index()
    {
        //get data from table data_peserta
        $peminjaman = Peminjaman::all();

        //make response JSON
        return response()->json([
            'success' => true,
            'message' => 'Data Peminjaman',
            'data' => $peminjaman,
        ], 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

        $peminjaman = new Peminjaman;
        $peminjaman->tgl_pinjam = $request->tgl_pinjam;
        $peminjaman->tgl_kembali = $request->tgl_kembali;
        $peminjaman->id_buku = $request->id_buku;
        $peminjaman->id_anggota = $request->id_anggota;
        $peminjaman->id_petugas = $request->id_petugas;
       
        $peminjaman->save();
        return response()->json([
            'success' => true,
            'message' => 'Data Peminjaman Berhasil Dibuat',
            'data' => $peminjaman,
        ], 201);

    }

    public function show($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        if ($peminjaman) {
            return response()->json([
                'success' => true,
                'message' => 'Show Data Peminjaman',
                'data' => $peminjaman,
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data Peminjaman Tidak Ditemukan',
                'data' => [],
            ], 200);
        }

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {

        $peminjaman = new Peminjaman;
        $peminjaman->tgl_pinjam = $request->tgl_pinjam;
        $peminjaman->tgl_kembali = $request->tgl_kembali;
        $peminjaman->id_buku = $request->id_buku;
        $peminjaman->id_anggota = $request->id_anggota;
        $peminjaman->id_petugas = $request->id_petugas;
       
        $peminjaman->save();
        return response()->json([
            'success' => true,
            'message' => 'Data Peminjaman Berhasil Dibuat',
            'data' => $peminjaman,
        ], 201);
    }

    public function destroy($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Peminjaman Berhasil Dihapus',
            'data' => $peminjaman,
        ], 200);

    }
}