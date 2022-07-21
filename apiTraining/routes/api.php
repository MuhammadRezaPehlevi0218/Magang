<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\Kecamatan;


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