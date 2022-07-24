<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahans extends Model
{
    use HasFactory;

    protected $fillable=[
        'kelurahan'
    ];

    public function Kecamatan(){
        return $this->belongTo(Kecamatans::class);
    }

    public function Laporan(){
        return $this->hasMany(Laporan::class);
    }
}
