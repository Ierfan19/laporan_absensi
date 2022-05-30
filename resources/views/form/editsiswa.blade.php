@extends('/layouts.main')
@section('container')
<form action="{{url('/editsiswa')}}" enctype="multipart/form-data" method="POST">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$editsiswa->id}}" >
<div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" name="nama" value="{{$editsiswa->nama}}" id="nama" class="form-control">
</div>
<div class="mb-3">
    <label for="nis" class="form-label">nis</label>
    <input type="number" id="nis" value="{{$editsiswa->nis}}" name="nis" class="form-control input-sm">
</div>
<div class="mb-3">
    <label for="rombel" class="form-label">Rombel</label>
    <input type="text " id="rombel" value="{{$editsiswa->rombel}}" name="rombel" class="form-control input-sm">
</div>

<select class="form-select" aria-label="Default select example" name="absen" style="width:600px;">
  <option selected>Absen</option>
  <option value="1">Masuk</option>
  <option value="2">Tidak Masuk</option>
</select>
<div class="mb-3">
    <label for="rayon" class="form-label">Rayon</label>
    <input type="text " id="rayon" value="{{$editsiswa->rayon}}" name="rayon" class="form-control input-sm">
</div>
<button class="btn btn-success">Send</button>
</form>
@endsection