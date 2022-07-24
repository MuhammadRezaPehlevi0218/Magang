<?php

use App\Http\Controllers\jenis_data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\Kecamatan;
use App\Http\Controllers\kelurahan;
use App\Http\Controllers\laporan;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('kecamatan',[Kecamatan::class,'index']);
Route::get('kecamatan/{id}',[Kecamatan::class,'show']);
Route::post('kecamatan',[Kecamatan::class,'store']);
Route::put('kecamatan/{id}',[Kecamatan::class,'update']);
Route::delete('kecamatan/{id}',[Kecamatan::class,'destroy']);

Route::get('kelurahan',[kelurahan::class,'index']);
Route::get('kelurahan/{id}',[kelurahan::class,'show']);
Route::post('kelurahan',[kelurahan::class,'store']);
Route::put('kelurahan/{id}',[kelurahan::class,'update']);
Route::delete('kelurahan/{id}',[kelurahan::class,'destroy']);

Route::get('laporan',[laporan::class,'index']);
Route::get('laporan/{id}',[laporan::class,'show']);
Route::post('laporan',[laporan::class,'store']);
Route::put('laporan/{id}',[laporan::class,'update']);
Route::delete('laporan/{id}',[laporan::class,'destroy']);

Route::get('jenis_data',[jenis_data::class,'index']);
Route::get('jenis_data/{id}',[jenis_data::class,'show']);
Route::post('jenis_data',[jenis_data::class,'store']);
Route::put('jenis_data/{id}',[jenis_data::class,'update']);
Route::delete('jenis_data/{id}',[jenis_data::class,'destroy']);