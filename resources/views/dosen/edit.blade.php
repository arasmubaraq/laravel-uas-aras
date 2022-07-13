@extends('layouts.app')

@section('content')
    <div class="container">
<a class="btn btn-danger btn-sm float-end" href="{{ url('home') }}">Kembali</a>
        <h3>Edit Data Dosen</h3>
        <form action="{{ url('/dosen/' . $row->dosen_id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label>Nama Dosen</label>
                <input type="text" class="form-control" name="dosen_nama" value="{{ $row->dosen_nama }}">
            </div>
            <div class="mb-3">
                <label>Alamat Dosen</label>
                <input type="text" class="form-control" name="alamat" value="{{ $row->alamat }}">
            </div>
            <div class="mb-3">
                <label>Tanggal Lahir Dosen</label>
                <input type="text" class="form-control" name="tgl_lahir" value="{{ $row->tgl_lahir }}">
            </div>
            <div class="mb-3">
                <input type="submit" value="UPDATE">
            </div>
        </form>
    </div>
@endsection
