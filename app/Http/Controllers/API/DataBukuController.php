<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\buku;
use Illuminate\Http\Request;

class DataBukuController extends Controller
{

    public function index()
    {
        //get data from table data_peserta
        $buku = Buku::all();

        //make response JSON
        return response()->json([
            'success' => true,
            'message' => 'Data Buku',
            'data' => $buku,
        ], 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

        $buku = new Buku();
        $buku->kode_buku = $request->kode_buku;
        $buku->judul_buku = $request->judul_buku;
        $buku->penulis_buku = $request->penulis_buku;
        $buku->penerbit_buku = $request->penerbit_buku;
        $buku->thn_terbit = $request->thn_terbit;
        if ($request->hasFile('cover')) {
            $buku->deleteImage();
            $image = $request->file('cover');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/buku', $name);
            $buku->cover = $name;
        }
        $buku->save();
        return response()->json([
            'success' => true,
            'message' => 'Data Buku Berhasil Dibuat',
            'data' => $buku,
        ], 201);

    }

    public function show($id)
    {
        $buku = Buku::findOrFail($id);
        if ($buku) {
            return response()->json([
                'success' => true,
                'message' => 'Show Data Buku',
                'data' => $buku,
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data Buku Tidak Ditemukan',
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

        $buku = Buku::findOrFail($id);
        $buku->kode_buku = $request->kode_buku;
        $buku->judul_buku = $request->judul_buku;
        $buku->penulis_buku = $request->penulis_buku;
        $buku->penerbit_buku = $request->penerbit_buku;
        $buku->thn_terbit = $request->thn_terbit;
        if ($request->hasFile('cover')) {
            $buku->deleteImage();
            $image = $request->file('cover');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/buku', $name);
            $buku->cover = $name;
        }
        $buku->save();
        return response()->json([
            'success' => true,
            'message' => 'Data buku Berhasil Dibuat',
            'data' => $buku,
        ], 201);
    }

    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data buku Berhasil Dihapus',
            'data' => $buku,
        ], 200);

    }
}