@extends('/layouts.main')
@section('container')
<div class="bg-white py-3 px-3 rounded">
    
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
<select class="form-select" aria-label="Default select example" name="absen" style="width:600px;">
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
@endsection