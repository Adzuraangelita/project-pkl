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
                                    <label for="">Masukan Tanggal Peminjaman</label>
                                    <input type="date" name="tgl_pinjam" value="{{$peminjaman->tgl_pinjam}}" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="">Masukan Tanggal Kembali</label>
                                    <input type="date" name="tgl_kembali" value="{{ $peminjaman->tgl_kembali }}" class="form-control" readonly>
</div>
                                <div class="form-group">
                                    <label for=""> Masukan Id Buku</label>
                                    <input type="number" name="id_buku" value="{{$peminjaman->id_buku}}" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label for=""> Masukan Id Anggota</label>
                                    <input type="number" name="id_anggota" value="{{$peminjaman->id_anggota}}" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label for=""> Masukan Id Petugas</label>
                                    <input type="number" name="id_petugas" value="{{$peminjaman->id_petugas}}" class="form-control" readonly>
                                </div>
                               
                                
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end Content --}}
@endsection