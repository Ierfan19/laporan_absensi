@extends('layouts.main')
@section('container')
<div class="bg-white px-1 py-3 rounded shadow" onload="javascript:window.print()">
    <div class="container">
        <h3 class="text-center mb-3">Laporan Absensi Smk Wikrama 1 Jepara</h3>
    <form class="d-flex ">
      <div class="row" style="width: 100%;">
        <div class="col-md-4 d-flex flex-row ">
          
    <label for="Tanggal" class="form-label mx-3 my-1">Tanggal</label>
    <input type="date" name="bulan"  id="Tanggal" class="form-control">
      <!-- <select class="form-select" aria-label="Default select example" name="bulan" id="bulan">
      <option selected="selected" value="bulan">Bulan</option>
      <option value="01">Januari</option>
      <option value="02">Februari</option>
      <option value="03">Maret</option>
      <option value="04">April</option>
      <option value="05">Mei</option>
      <option value="06">Juni</option>
      <option value="07">July</option>
      <option value="08">Agustus</option>
      <option value="09">September</option>
      <option value="10">Oktober</option>
      <option value="11">November</option>
      <option value="12">Desember</option>
    </select> -->
        </div>
        <div class="col-md-1">
            
    <input type="submit" class="btn btn-info rounded" value="Set">
        </div>
        <div class="col-md-7">
            
    <a href="/cetak" target="_blank" class="btn btn-warning float-end">Cetak</a>
        </div>
      </div>
    </form>
    <table class="table rounded shadow">
        <thead>
            <tr class="text-white" style="background: linear-gradient(to left, #25c2b5 15%, #6094ea 80%);">
                <th>Nama</th>
                <th>Nis</th>
                <th>Rombel</th>
                <th>Rayon</th>
                <th>Absen</th>
                <th>Keterangan</th>
                <th>Tgl</th>
            </tr>
        </thead>
        <tbody class="mb-5">
            @foreach($laporan as $row)
            <tr>
                <td>{{$row->nama}}</td>
                <td>{{$row->nis}}</td>
                <td>{{$row->siswa->rombel}}</td>
                <td>{{$row->siswa->rayon}}</td>
                <td>{{$row->absen}}</td>
                <td>{{$row->ket}}</td>
                <td>{{$row->created_at}}</td>
            </tr>
            @endforeach
            </tbody>
    </table>
    </div>
</div>

<!-- Modal -->
      </div>
    </div>
  </div>
</div>
@endsection