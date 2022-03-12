<?php

namespace App\Http\Controllers;
use App\Models\anggota;
use App\Models\buku;
use App\Models\petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $petugas = Petugas::all();
        return view('petugas.index', compact('petugas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('petugas.create');
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
            'nama_petugas' => 'required',
            'jabatan_petugas' => 'required',
            'no_telp_petugas' => 'required',
            'alamat_petugas' => 'required',
            
           
        ]);

        $petugas = new Petugas;
        $petugas->nama_petugas = $request->nama_petugas;
        $petugas->jabatan_petugas = $request->jabatan_petugas;
        $petugas->no_telp_petugas = $request->no_telp_petugas;
        $petugas->alamat_petugas = $request->alamat_petugas;
        
       
        $petugas->save();
        return redirect()->route('petugas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function show(petugas $petugas)
    {
        $petugas = Petugas::findOrFail($id);
        return view('petugas.show', compact('petugas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function edit(petugas $petugas)
    {
        $petugas = Petugas::findOrFail($id);
        return view('petugas.edit', compact('petugas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, petugas $petugas)
    {
        $validated = $request->validate([
            'nama_petugas' => 'required',
            'jabatan_petugas' => 'required',
            'no_telp_petugas' => 'required',
            'alamat_petugas' => 'required',
            
           
        ]);

        $petugas = new Petugas;
        $petugas->nama_petugas = $request->nama_petugas;
        $petugas->jabatan_petugas = $request->jabatan_petugas;
        $petugas->no_telp_petugas = $request->no_telp_petugas;
        $petugas->alamat_petugas = $request->alamat_petugas;
        
       
        $petugas->save();
        return redirect()->route('petugas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function destroy(petugas $petugas)
    {
        $petugas = Petugas::findOrFail($id);
        $petugas->delete();
        return redirect()->route('petugas.index');
    }
}
