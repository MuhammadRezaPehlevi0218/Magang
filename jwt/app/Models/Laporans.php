<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporans extends Model
{
    use HasFactory;

    protected $fillable=[
        'id_kelurahans',
        'tahun',
        'semster',
        'id_jenis_data',
        'vallue'
    ];

    public function Kelurahan(){
        return $this->belongsTo(Kelurahans::class);
    }

    public function Jenis_datas(){
        return $this->belongTo(Jenis_datas::class);
    }
}