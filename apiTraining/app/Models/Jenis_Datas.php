<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis_Datas extends Model
{
    use HasFactory;

    protected $fillable=[
        'jenis'
    ];

    public function Jenis_data(){
        return $this->hasMany(Laporans::class);
    }

}
