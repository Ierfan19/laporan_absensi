@extends('layouts.main')
@section('container')
<div class="bg-white px-1 py-3 rounded">
    <div class="container">
        
    <a href="/tambah" class="float-end mb-2 btn btn-success">Tambah</a>
    <table class="table rounded">
        <thead>
            <tr class="table-primary">
                <td>Nama</td>
                <td>Email</td>
                <td>Password</td>
                <td>Status</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            @foreach($listuser as $row)
            <tr>
                <td>{{$row->name}}</td>
                <td>{{$row->email}}</td>
                <td>{{$row->password}}</td>
                <td>{{$row->role}}</td>
                <td><a href="/edit" class="btn btn-primary">Edit</a>
                    <a href="/hapus" class="btn btn-danger">Hapus</a>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
@endsection