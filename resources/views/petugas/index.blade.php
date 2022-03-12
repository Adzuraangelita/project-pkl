@extends('adminlte::page')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Data Pengembalian</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container"><br>
        Data Petugas
        <hr>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('petugas.create') }}"
                            class="btn btn-sm btn-outline-primary float-right">Tambah
                            Petugas</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Nama Petugas</th>
                                    <th>Jabatan Petugas</th>
                                    <th>No Telp Petugas</th>
                                    <th>Alamat Petugas</th>
                                    <th>Aksi</th>
                                </tr>
                                @php $no=1; @endphp
                                @foreach ($petugas as $data)
                                    <tr>
                                        <td>{{ $data->nama_petugas }}</td>
                                        <td>{{ $data->jabatan_petugas }}</td>
                                        <td>{{ $data->no_telp_petugas }}</td>
                                        <td>{{ $data->alamat_petugas }}</td>
                
                                        <td>
                                            <form action="{{ route('petugas.destroy', $data->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                {{-- <a href="{{ route('petugas.edit', $data->id) }}"
                                                    class="btn btn-outline-info">Edit</a>
                                                <a href="{{ route('petugas.show', $data->id) }}"
                                                    class="btn btn-outline-warning">Show</a> --}}
                                                <button type="submit" class="btn btn-outline-danger"
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
