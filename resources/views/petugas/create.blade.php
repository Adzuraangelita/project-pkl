@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    Halaman Petugas

@stop

@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Petugas</div>
                    <div class="card-body">
                        <form action="{{ route('petugas.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                           
                            <div class="form-group">
                                <label for="">Masukan Nama Petugas</label>
                                <input type="text" name="nama_petugas"
                                    class="form-control @error('nama_petugas') is-invalid @enderror">
                                @error('nama_petugas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Jabatan Petugas</label>
                                <input type="text" name="jabatan_petugas"
                                    class="form-control @error('jabatan_petugas') is-invalid @enderror">
                                @error('jabatan_petugas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan No Telpon Petugas</label>
                                <input type="number" name="no_telp_petugas"
                                    class="form-control @error('no_telp_petugas') is-invalid @enderror">
                                @error('no_telp_petugas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Alamat Petugas</label>
                                <input type="text" name="alamat_petugas"
                                    class="form-control @error('alamat_petugas') is-invalid @enderror">
                                @error('alamat_petugas')
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

@stop

@section('css')

@stop

@section('js')

@stop
