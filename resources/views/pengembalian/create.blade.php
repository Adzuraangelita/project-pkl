@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    Halaman Pengembalian

@stop

@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data pengembalian</div>
                    <div class="card-body">
                        <form action="{{ route('pengembalian.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="">Masukan Tanggal pengembalian</label>
                                <input type="date" name="tgl_pengembalian"
                                    class="form-control @error('tgl_pengembalian') is-invalid @enderror">
                                @error('tgl_pengembalian')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="">Masukan Id Buku</label>
                                <input type="number" name="id_buku"
                                    class="form-control @error('id_buku') is-invalid @enderror">
                                @error('id_buku')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Id Anggota</label>
                                <input type="number" name="id_anggota"
                                    class="form-control @error('id_anggota') is-invalid @enderror">
                                @error('id_anggota')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Id Petugas</label>
                                <input type="number" name="id_petugas"
                                    class="form-control @error('id_petugas') is-invalid @enderror">
                                @error('id_petugas')
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
