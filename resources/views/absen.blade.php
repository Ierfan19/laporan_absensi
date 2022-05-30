@extends('layouts.main')
@section('container')
<div class="bg-white px-1 py-3 rounded shadow">
    <div class="container">
        
    <table class="table rounded shadow">
            <thead>
            <tr class="table-warning">
                <td>Nama</td>
                <td>Nis</td>
                <th>Absen</th>
                <th>Ket</th>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            @foreach($listabsen as $row)
            <tr>
                <td>{{$row->nama}}</td>
                <td>{{$row->nis}}</td>
                <td>{{$row->absen}}</td>
                <td>{{$row->ket}}</td>
                   <td> <a href="/hapusabsen/{{$row->id}}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/form/absen" class=" btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Absen</a>
    </div>
</div>

<!-- modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Absen</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<div class="bg-white py-3 px-3 rounded">
    
<form action="{{url('/addabsen')}}" method="post">
    {{csrf_field()}}
<div class="mb-3">
    <input type="hidden" name="id" id="id">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" name="nama"  id="nama" class="form-control">
</div>
<div class="mb-3">
    <label for="nis" class="form-label">nis</label>
    <input type="number" id="nis" onkeyup="Absen()" name="nis" class="form-control input-sm">
</div>
<div class="mb-3">
    <label for="rombel" class="form-label">Rombel</label>
    <input type="text " id="rombel" name="rombel" class="form-control input-sm">
</div>
<label for="" class="form-label">Absen</label>
<select class="form-select" aria-label="Default select example" name="absen" style="width:435px;">
  <option selected value="">--pilih--</option>
  <option value="masuk">Masuk</option>
  <option value="tidak masuk">Tidak Masuk</option>
</select>
<div class="mb-3">
    <label for="ket" class="form-label">Ket</label>
    <input type="text " id="ket" name="ket" class="form-control input-sm">
</div>
<button class="btn btn-success">Send</button>
</form>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
@endsection

@push('bottom')
<script>
    function Absen(){
        cari = $('#nis').val()
        if ( cari == ''){
            $('#nama').val('')
            $('#rombel').val('')
            $('#rombel').val('')
            $('#rayon').val('')
        }
        $.ajax({
            url:"{{route('cari')}}",
            type:"get",
            dataType:'json',
            data:{
                id:$('#nis').val()
            },
            success:function(hasil){
                if(hasil.val==0){
                    $('#nama').val('')
                    $('#rombel').val('')
                    $('#rayon').val('')
                }
                else if(hasil.val==2){
                    $('#nama').val('')
                    $('#rombel').val('')
                    $('#rayon').val('')
                }
                else{
                    $('#nama').val(hasil.data.nama)
                    $('#id').val(hasil.data.id)
                    $('#rombel').val(hasil.data.rombel)
                    $('#rayon').val(hasil.data.rayon)
                }
            }
        })
    }
</script>