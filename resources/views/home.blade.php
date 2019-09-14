@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/home/tambah" class="btn btn-primary">Input Pegawai Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pegawai as $p)
                            <tr>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->alamat }}</td>
                                <td>
                                    <a href="/home/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/home/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
