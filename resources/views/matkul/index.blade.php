@extends('layouts.app')

@section('content')

<div class = "container">

    <h3> 
        Daftar Matkul
        <a class="btn btn-primary btn-sm float-end" href="{{ url('matkul/create') }}">Tambah Data</a>
    </h3>

    <table class ="table table-bordered">
        <tr>
            <th>NO</th>
            <th>ID DOSEN</th>
            <th>NAMA</th>
            <th>JUMLAH SKS</th>
            <th>SEMESTER</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        @foreach($rows as $row)
        <tr>
        <td>{{ $row->matkul_id }}</td>
        <td>{{ $row->matkul_id_dosen }}</td>
        <td>{{ $row->matkul_nama }}</td>
        <td>{{ $row->jumlah_sks }}</td>
        <td>{{ $row->semester }}</td>
        <td><a href="{{ url('matkul/' . $row->matkul_id . '/edit') }}">Edit</a></td>
                    <td>
                        <form action="{{ url('matkul/' . $row->matkul_id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button>Hapus</button>
        </tr>
        @endforeach

    </table>


</div>
@endsection