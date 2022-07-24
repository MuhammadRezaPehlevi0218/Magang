<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatans extends Model
{
    use HasFactory;

    // protected $fillabel=[
    //     'kecamatan'
    // ];

    protected $guarded=[];

    public function kelurahan()
    {
        return $this->hasMany(Kelurahans::class);
    }
}
