<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="/asset/css/bootstrap.min.css" rel="stylesheet" >
    <link href="/asset/css/cetak.css" rel="stylesheet" >
    <link href="/asset/fontawesome/css/all.css" rel="stylesheet">

    <title>Welcome</title>
  </head>
  <body onload="javascript:window.print()">
    <div class="fadek col-md-10 bg-white profil py-4 px-3 shadow">
<div class="bg-white px-1 py-3 rounded shadow">
    <div class="container">
        <h3 class="text-center mb-3">Laporan Absensi Smk Wikrama 1 Jepara</h3>
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
                <td>{{$row->siswa->nama}}</td>
                <td>{{$row->siswa->nis}}</td>
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
</div>
    <script src="/asset/js/bootstrap.bundle.min.js"></script>
    <script src="/asset/js/jquery.js"></script>

  </body>
</html>


