@extends('adminlte::page')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Data Buku</h1>
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
                                    <label for="">Data register</label>
                                    <input type="text" name="kode_register" value="{{$buku->kode_register}}" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="">Masukan Judul Buku</label>
                                    <input type="text" name="judul" value="{{ $buku->judul }}" class="form-control" readonly>
</div>
                                <div class="form-group">
                                    <label for=""> Masukan Nama Pengarang</label>
                                    <input type="text" name="pemgarang" value="{{$buku->pengarang}}" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label for=""> Masukan Nama Penerbit</label>
                                    <input type="text" name="penerbit" value="{{$buku->penerbit}}" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label for=""> Masukan Tahun Terbit</label>
                                    <input type="text" name="thn_terbit" value="{{$buku->thn_terbit}}" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                <label for=""> Cover Buku</label>
                                <br>
                                <img src="{{ $buku->image() }} " height="75" style="padding:10px;" />
                            </div>
                                
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end Content --}}
@endsection