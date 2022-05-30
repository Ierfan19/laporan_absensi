<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use App\Models\Siswa;
use App\Models\Labsen;

class LaporanController extends Controller
{
    
    function getViewLaporan(){
        $s = Request::get('bulan');
        if($s == ''){
            $dataParameter['laporan'] = Labsen::with('siswa')->get();
        }
        else{

        $dataParameter['laporan'] = Labsen::with('siswa')
        ->whereDate('created_at','=',$s)->get();
        }
        return view('laporan.lapor', $dataParameter);
    }function getViewCetak(){
        $s = Request::get('bulan');
        if($s == ''){
            $s = date('Y-m-d');
        }
        $dataParameter['laporan'] = Labsen::with('siswa')
        ->whereDate('created_at','=',$s)->get();
        return view('laporan.cetak', $dataParameter);
    }
}
