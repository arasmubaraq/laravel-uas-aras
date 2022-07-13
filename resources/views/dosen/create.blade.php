@extends('layouts.app')

@section('content')
    <div class="container">
<a class="btn btn-danger btn-sm float-end" href="{{ url('home') }}">Kembali</a>
        <h3>Tambah Data Dosen</h3>
        <form action="{{ url('/dosen') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Nama Dosen</label>
                <input type="text" class="form-control" name="dosen_nama">
            </div>
            <div class="mb-3">
                <label>Alamat Dosen</label>
                <input type="text" class="form-control" name="alamat">
            </div>
            <div class="mb-3">
                <label>Tanggal Lahir Dosen</label>
                <input type="text" class="form-control" name="tgl_lahir">
            </div>
            <div class="mb-3">
                <input type="submit" value="SIMPAN">
            </div>
        </form>
    </div>
@endsection
