@extends('adminlte::page')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Edit Data Petugas</h1>
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
                    <div class="card-header">Data Petugas</div>
                    <div class="card-body">
                        <form action="{{ route('petugas.update', $petugas->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="">Masukan Nama Petugas</label>
                                <input type="text" name="nama_petugas" value="{{ $petugas->nama_petugas }}"
                                    class="form-control @error('nama_petugas') is-invalid @enderror">
                                @error('nama_petugas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Jabatan Petugas</label>
                                <input type="text" name="jabatan_petugas" value="{{ $petugas->jabatan_petugas }}"
                                    class="form-control @error('jabatan_petugas') is-invalid @enderror">
                                @error('jabatan_petugas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan No Telpon Petugas</label>
                                <input type="number" name="no_telp_petugas" value="{{ $petugas->no_telp_petugas }}"
                                    class="form-control @error('no_telp_petugas') is-invalid @enderror">
                                @error('no_telp_petugas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Alamat Petugas</label>
                                <input type="text" name="alamat_petugas" value="{{ $petugas->alamat_petugas }}"
                                    class="form-control @error('alamat_petugas') is-invalid @enderror">
                                @error('alamat_petugas')
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
