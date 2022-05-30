<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Absen;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $primaryKey = 'id';
     public $timestamps = false;

    function Absen(){
        return $this->belongsTo(Absen::class, 'absen_id', 'id');
    }
}
