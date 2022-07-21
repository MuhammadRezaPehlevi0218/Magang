<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class laporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('laporans')->insert([
            'id'=>1,
            'id_kelurahans'=>1,
            'tahun'=>2022,
            'semester'=>6,
            'id_jenis_datas'=>1,
            'value'=>'laporan perubahan data ktp'
        ]);
    }
}
