@extends('adminlte::page')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Data Anggota</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container"><br>
        Data Anggota
        <hr>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('anggota.create') }}" class="btn btn-sm btn-outline-primary float-right">Tambah
                            Anggota</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Kode Anggota</th>
                                    <th>Nama Anggota</th>
                                    <th>Jenis Kelamin Anggota</th>
                                    <th>Jurusan Anggota</th>
                                    <th>No Telpon Anggota</th>
                                    <th>Alamat Anggota</th>
                                    <th>Aksi</th>
                                </tr>
                                @php $no=1; @endphp
                                @foreach ($anggota as $data)
                                    <tr>
                                        <td>{{ $data->kode_anggota }}</td>
                                        <td>{{ $data->nama_anggota }}</td>
                                        <td>{{ $data->jk_anggota }}</td>
                                        <td>{{ $data->jurusan_anggota }}</td>
                                        <td>{{ $data->no_telp_anggota }}</td>
                                        <td>{{ $data->alamat_anggota }}</td>
                                        
                                        <td>
                                            <form action="{{ route('anggota.destroy', $data->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{ route('anggota.edit', $data->id) }}"
                                                    class="btn btn-info">Edit</a>
                                                <a href="{{ route('anggota.show', $data->id) }}"
                                                    class="btn btn-warning">Show</a> 
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Apakah anda yakin menghapus ini?');">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
