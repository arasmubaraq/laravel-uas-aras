@extends('layouts.app')

@section('content')

<div class = "container">

    <h3> 
        Daftar Dosen
        <a class="btn btn-primary btn-sm float-end" href="{{ url('dosen/create') }}">Tambah Data</a>
    </h3>

    <table class ="table table-bordered">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>TANGGAL LAHIR</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        @foreach($rows as $row)
        <tr>
        <td>{{ $row->dosen_id }}</td>
        <td>{{ $row->dosen_nama }}</td>
        <td>{{ $row->alamat }}</td>
        <td>{{ $row->tgl_lahir }}</td>
        <td><a href="{{ url('dosen/' . $row->dosen_id . '/edit') }}">Edit</a></td>
                    <td>
                        <form action="{{ url('dosen/' . $row->dosen_id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button>Hapus</button>
        </tr>
        @endforeach

    </table>


</div>
@endsection