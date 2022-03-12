@extends('adminlte::page')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Data Peminjaman</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
<div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Masukan Kode Anggota</label>
                                    <input type="number" name="kode_anggota" value="{{$anggota->kode_anggota}}" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="">Masukan Nama Anggota</label>
                                    <input type="text" name="nama_anggota" value="{{ $anggota->nama_anggota }}" class="form-control" readonly>
                               </div>
                                <div class="form-group">
                                    <label for=""> Masukan Jenis Kelamin</label>
                                    <input type="text" name="jk_anggota" value="{{$anggota->jk_anggota}}" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label for=""> Masukan Jurusan Anggota</label>
                                    <input type="text" name="jurusan_anggota" value="{{$anggota->jurusan_anggota}}" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label for=""> Masukan No Telpon Anggota</label>
                                    <input type="number" name="no_telp_anggota" value="{{$anggota->no_telp_anggota}}" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label for=""> Masukan Alamat Anggota</label>
                                    <input type="text" name="alamat_anggota" value="{{$anggota->alamat_anggota}}" class="form-control" readonly>
                                </div>
                                
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end Content --}}
@endsection