@extends('layouts.main')
@section('container')
<div class="bg-white rounded px-2 py-3 tambah">
    <div class="container">
        <p class="fs-4 text-center">FORM TAMBAH</p>
    <form action="">
        <div class="mb-3 d-flex flex-row">
            <label for="name" class="form-label col-md-2">Masukan Nama</label>
            <input type="text" class="form-control" width="100">
        </div>
        <div class="mb-3 d-flex">
            <label for="name" class="form-label col-md-2">Masukan Keterangan</label>
            <input type="text" class="form-control">
        </div>
        <div class="mb-3 d-flex">
            <label for="name" class="form-label col-md-2">Masukan Harga</label>
            <input type="number" class="form-control">
        </div>
        <div class="mb-3 d-flex">
            <label for="name" class="form-label col-md-2">Masukan Gambar</label>
            <input type="file" class="form-control">
        </div>
        <div class="mb-3 d-flex flex-row">
           <button class="btn btn-warning float-end">Submit</button>
        </div>
    </form>
    </div>

</div>
@endsection