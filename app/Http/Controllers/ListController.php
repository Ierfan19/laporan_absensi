<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Labsen;
use App\Models\Siswa;

class ListController extends Controller
{
    // function __construct()
    // {
    //     $this->middleware('auth');
    // }
    function getViewDash(){
        $dataParameter['listuser'] = User::all();
        $dataParameter['listabsen'] = Labsen::all();
        $dataParameter['listsiswa'] = Siswa::with('absen')->get();
        return view('/dashboard',$dataParameter);
    }
    function getViewTables(){
        return view('/tables');
    }
    function getViewTambah(){
        return view('/tambah');
    }
}
