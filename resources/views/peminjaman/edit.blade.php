@extends('adminlte::page')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Edit Data Peminjaman</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Peminjaman</div>
                    <div class="card-body">
                        <form action="{{ route('peminjaman.update', $peminjaman->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="">Masukan Tanggal Pinjam</label>
                                <input type="date" name="tgl_pinjam" value="{{ $peminjaman->tgl_pinjam }}"
                                    class="form-control @error('tgl_pinjam') is-invalid @enderror">
                                @error('tgl_pinjam')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Tanggal Kembali</label>
                                <input type="date" name="tgl_kembali" value="{{ $peminjaman->tgl_kembali }}"
                                    class="form-control @error('tgl_kembali') is-invalid @enderror">
                                @error('tgl_kembali')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Id Buku</label>
                                <input type="number" name="id_buku" value="{{ $peminjaman->id_buku }}"
                                    class="form-control @error('id_buku') is-invalid @enderror">
                                @error('id_buku')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Id Anggota</label>
                                <input type="number" name="id_anggota" value="{{ $peminjaman->id_anggota }}"
                                    class="form-control @error('id_anggota') is-invalid @enderror">
                                @error('id_anggota')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Id Petugas</label>
                                <input type="number" name="id_petugas" value="{{ $peminjaman->id_petugas }}"
                                    class="form-control @error('id_petugas') is-invalid @enderror">
                                @error('id_petugas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
