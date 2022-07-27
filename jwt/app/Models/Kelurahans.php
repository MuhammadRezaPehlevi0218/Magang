<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahans extends Model
{
    use HasFactory;

    protected $fillable=[
        'id_kecamatans',
        'kelurahan'
    ];

    public function Kecamatan(){
        return $this->belongsTo(Kecamatans::class,'id_kecamatans');
    }

    public function Laporan(){
        return $this->hasMany(Laporan::class);
    }
}
