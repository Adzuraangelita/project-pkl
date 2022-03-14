@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    Halaman Peminjaman

@stop

@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Peminjaman</div>
                    <div class="card-body">
                        <form action="{{ route('peminjaman.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="">Masukan Tanggal Peminjaman</label>
                                <input type="date" name="tgl_pinjam"
                                    class="form-control @error('tgl_pinjam') is-invalid @enderror">
                                @error('tgl_pinjam')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Tanggal Kembali</label>
                                <input type="date" name="tgl_kembali"
                                    class="form-control @error('tgl_kembali') is-invalid @enderror">
                                @error('tgl_kembali')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Id Buku</label>
                                <select name="id_buku" id="" class="form-control">
                                    @foreach($buku as $data)
                                        <option value="{{ $data->id }}">{{ $data->judul_buku }}</option>
                                    @endforeach
                                </select>
                              
                                @error('id_buku')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Id Anggota</label>
                                <select name="id_anggota" id="" class="form-control">
                              @foreach($anggota as $data)
                              <option value="{{ $data->id }}">{{ $data->nama_anggota }}</option>

                              @endforeach
                              </select>

                                @error('id_anggota')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Id Petugas</label>
                               <select name="id_petugas" id="" class="form-control">
                                   @foreach($petugas as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama_petugas }}</option>
                                   @endforeach
                               </select>
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
