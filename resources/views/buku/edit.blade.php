@extends('adminlte::page')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Edit Data Buku</h1>
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
                    <div class="card-header">Data Buku</div>
                    <div class="card-body">
                        <form action="{{ route('buku.update', $buku->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="">Masukan Kode buku</label>
                                <input type="number" name="kode_buku" value="{{ $buku->kode_buku }}"
                                    class="form-control @error('kode_buku') is-invalid @enderror">
                                @error('kode_buku')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Judul Buku</label>
                                <input type="text" name="judul_buku" value="{{ $buku->judul_buku }}"
                                    class="form-control @error('judul_buku') is-invalid @enderror">
                                @error('judul_buku')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Nama Penulis</label>
                                <input type="text" name="penulis_buku" value="{{ $buku->penulis_buku }}"
                                    class="form-control @error('penulis_buku') is-invalid @enderror">
                                @error('penulis_buku')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Nama Penerbit</label>
                                <input type="text" name="penerbit_buku" value="{{ $buku->penerbit_buku }}"
                                    class="form-control @error('penerbit_buku') is-invalid @enderror">
                                @error('penerbit_buku')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Masukan Tahun Terbit</label>
                                <input type="date" name="thn_terbit" value="{{ $buku->thn_terbit }}"
                                    class="form-control @error('thn_terbit') is-invalid @enderror">
                                @error('thn_terbit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Masukan Cover Buku</label>
                                <input type="file" name="cover" value="{{ $buku->cover }}"
                                    class="form-control @error('cover') is-invalid @enderror">
                                @error('cover')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="reset" class="btn btn-outline-warning">Reset</button>
                                <button type="submit" class="btn btn-outline-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
