<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Labsen extends Model
{
    use HasFactory;
    protected $table = 'listabsen';
    protected $primaryKey = 'id';
    public $timestamps = false;
    
    function Siswa(){
        return $this->belongsTo(Siswa::class, 'siswa_id', 'id');
    }
}
