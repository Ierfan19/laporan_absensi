<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;
use App\Models\Siswa;
use App\Models\Labsen;

class SiswaController extends Controller
{
    function getViewList(){
        // $urut = Request::get('fild');
        // if($urut == ''){
        //     $urut = 'id';
        // }
        // $oleh = Request::get('iku');
        // if($oleh == ''){
        //     $oleh = 'asc';
        // }
        // $search = Request::get('search');
        // $dataParameter['listproduk'] = produk::with('categori')
        // ->where(function($q) use($search){
        //     $q->where('nama','like','%'.$search.'%')
        //     ->orwhere(
        //         'harga','like','%'.$search.'%'
        //     )
        //     ->orwhere(
        //         'ket','like','%'.$search.'%'
        //     )
        //     ->orwhere(
        //         'categori_id','like','%'.$search.'%'
        //     );
        // })
        // ->orderBy($urut, $oleh)->get();
        // dd($dataParameter);
        $dataParameter['listsiswa'] = Siswa::all();
        $dataParameter['listabsen'] = Labsen::all();
        return view('tables', $dataParameter);
    }
    function getViewLista(){
        
        $dataParameter['listabsen'] = Labsen::all();
        return view('absen', $dataParameter);
    }
    function getAddSiswa(){
        return view('/form/addsiswa');
    }
    function postAddSiswa(){
        $nama = Request::get('nama');
        $nis = Request::get('nis');
        $rombel = Request::get('rombel');
        $rayon = Request::get('rayon');
        $absen = Request::get('absen');

        $siswa =  new Siswa;
        $siswa->nama =$nama;
        $siswa->nis = $nis;
        $siswa->rombel = $rombel;
        $siswa->rayon = $rayon;
        $siswa->absen_id = $absen;
        $siswa->save();
        return redirect('tables');
    }
    function getEditsiswa($id){
        $dataParameter['editsiswa'] = Siswa::find($id);
        return view('/form/editsiswa', $dataParameter);
    }
    function postEditSiswa(){
        $id = Request::get('id');
        $nama = Request::get('nama');
        $nis = Request::get('nis');
        $rombel = Request::get('rombel');
        $rayon = Request::get('rayon');
        $absen = Request::get('absen');

        $siswa = Siswa::find($id);
        $siswa->nama =$nama;
        $siswa->nis = $nis;
        $siswa->rombel = $rombel;
        $siswa->rayon = $rayon;
        $siswa->absen_id = $absen;
        $siswa->save();
        return redirect('tables');
    }
    function getDeletedSiswa($id){
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect('tables');
    }
    function getDeletedAbsen($id){
        $absen = Labsen::find($id);
        $absen->delete();
        return redirect('absen');
    }

    function getCariAbsen(){
        $id = Request::get('id');
        if ($id==''){
            $data['val'] = 2;
        }
        else{
            $isi = Siswa::where('nis', '=',$id)->first();
            if(empty($isi)){
                $data['val'] = 0;
            }
            else{
                $data['val'] = 1;
                $data['data']= $isi;
            }
            return response($data);
        }

    }
    function getViewAbsen(){
        return view('form.absen');
    }

    function postAddAbsen(){
        $nama = Request::get('nama');
        $nis = Request::get('nis');
        $absen = Request::get('absen');
        $ket = Request::get('ket');
        $id = Request::get('id');

        $siswa =  new Labsen;
        $siswa->nama =$nama;
        $siswa->nis = $nis;
        $siswa->ket = $ket;
        $siswa->absen = $absen;
        $siswa->siswa_id = $id;
        $siswa->save();
        return redirect('absen');
    }
}
