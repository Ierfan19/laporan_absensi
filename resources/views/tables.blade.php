@extends('layouts.main')
@section('container')
<div class="bg-white px-1 py-3 rounded shadow">
    <div class="container">
        
    <a href="/form/addsiswa" class="float-end mb-2 btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah</a>
    <table class="table rounded shadow">
        <thead>
            <tr class="table-danger ">
                <td>Nama</td>
                <td>Nis</td>
                <td>Rombel</td>
                <td>Rayon</td>
                <th>Absen</th>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody class="mb-5">
            @foreach($listsiswa as $row)
            <tr>
                <td>{{$row->nama}}</td>
                <td>{{$row->nis}}</td>
                <td>{{$row->rombel}}</td>
                <td>{{$row->rayon}}</td>
                <td>{{$row->absen->ket}}</td>
                <td><a href="/form/editsiswa/{{$row->id}}" class="btn btn-primary">Edit</a>
                    <a href="/hapussiswa/{{$row->id}}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            @endforeach
            </tbody>
    </table>
    <a href="/form/absen" class=" btn btn-warning">Tambah Absen</a>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            
<form action="{{url('/addsiswa')}}" method="post">
    {{csrf_field()}}
<div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" name="nama"  id="nama" class="form-control">
</div>
<div class="mb-3">
    <label for="nis" class="form-label">nis</label>
    <input type="number" id="nis" name="nis" class="form-control input-sm">
</div>
<div class="mb-3">
    <label for="rombel" class="form-label">Rombel</label>
    <input type="text " id="rombel" name="rombel" class="form-control input-sm">
</div>
<select class="form-select" aria-label="Default select example" name="absen" style="width:430px;">
  <option selected>Absen</option>
  <option value="1">Masuk</option>
  <option value="2">Tidak Masuk</option>
</select>
<div class="mb-3">
    <label for="rayon" class="form-label">Rayon</label>
    <input type="text " id="rayon" name="rayon" class="form-control input-sm">
</div>
<button class="btn btn-success">Send</button>
</form>
</div>
      </div>
    </div>
  </div>
</div>
@endsection