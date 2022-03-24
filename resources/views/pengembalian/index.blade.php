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
        Data Pengembalian
        <hr>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('pengembalian.create') }}"
                            class="btn btn-sm btn-outline-primary float-right">Tambah
                            Pengembalian</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Tanggal Pengembalian</th>
                                    <th>Denda</th>
                                     <th>Id Buku</th>
                                    <th>Id Anggota</th>
                                    <th>Id Petugas</th>
                                    <th>Aksi</th>
                                </tr>
                                @php $no=1; @endphp
                                @foreach ($pengembalian as $data)
                                    <tr>
                                        <td>{{ $data->tgl_pengembalian }}</td>
                                        <td>{{ $data->denda }}</td>
                                        <td>{{ $data->id_buku }}</td>
                                        <td>{{ $data->id_anggota }}</td>
                                        <td>{{ $data->id_petugas }}</td>
                                        <td>
                                            <form action="{{ route('pengembalian.destroy', $data->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                {{-- <a href="{{ route('pengembalian.edit', $data->id) }}"
                                                    class="btn btn-outline-info">Edit</a>
                                                <a href="{{ route('pengembalian.show', $data->id) }}"
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
