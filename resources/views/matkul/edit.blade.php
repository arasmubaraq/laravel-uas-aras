@extends('layouts.app')

@section('content')
    <div class="container">
<a class="btn btn-danger btn-sm float-end" href="{{ url('home') }}">Kembali</a>
        <h3>Edit Data Matkul</h3>
        <form action="{{ url('/matkul/' . $row->matkul_id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label>ID DOSEN</label>
                <input type="text" class="form-control" name="matkul_id_dosen" value="{{ $row->matkul_id_dosen }}"></>
            </div>
            <div class="mb-3">
                <label>Nama Matkul</label>
                <input type="text" class="form-control" name="matkul_nama" value="{{ $row->matkul_nama }}"></>
            </div>
            <div class="mb-3">
                <label>Jumlah SKS </label>
                <input type="text" class="form-control" name="jumlah_sks" value="{{ $row->jumlah_sks }}"></>
            </div>
            <div class="mb-3">
                <label>Semester</label>
                <input type="text" class="form-control" name="semester" value="{{ $row->semester }}"></>
            </div>
            <div class="mb-3">
                <input type="submit" value="UPDATE">
            </div>
        </form>
    </div>
@endsection
