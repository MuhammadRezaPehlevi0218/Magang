<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kecamatans;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class Kecamatan extends Controller
{
    /**
     * fungsi index berfungsi untuk menampilkan semua data 
     */
    public function index()
    {
        $kecamatan = Kecamatans::orderBy('id','DESC')->get();

        $response=[
            'message'=>'List kecamatan order by id',
            'data'=>$kecamatan
        ];

        return response()->json($response,Response::HTTP_OK);
    }

    /**
     * fungsi store berfungsi untuk menambahkan data
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'kecamatan'=>['required']
        ]);
        
        if($validator->fails()){
            return response()->json($validator->errors(),
            Response::HTTP_UNPROCESSABLE_ENTITY);
        };

        try {
            $kecamatan=Kecamatans::create($request->all());
            $response=[
                'message'=>'Data berhasil dibuat',
                'data'=>$kecamatan
            ];

            return response()->json($response,Response::HTTP_CREATED);

        } catch (QueryException $e) {
            
            return response()->json([
               'message'=> "gagal" . $e->errorInfo
            ]);

        }
    }

    /**
     * fungsi show untuk menampilkan data yang spesifik berdasarkan id
     */
    public function show($id)
    {
        $kecamatan=Kecamatans::findOrFail($id);

        $response=[
            'message'=>'Data Kecamatan',
            'data'=>$kecamatan
        ];

        return response()->json($response,Response::HTTP_OK);

    }

    /**
     * fungsi update berguna untuk mlakukan edit atau update 
     * data berdasarkan id
     */
    public function update(Request $request, $id)
    {
        $kecamatan=Kecamatans::findOrFail($id);

        $validator = Validator::make($request->all(),[
            'kecamatan'=>['required']
        ]);
        
        if($validator->fails()){
            return response()->json($validator->errors(),
            Response::HTTP_UNPROCESSABLE_ENTITY);
        };

        try {
            $kecamatan->update($request->all());

            $response=[
                'message'=>'Data berhasil diubah',
                'data'=>$kecamatan
            ];

            return response()->json($response,Response::HTTP_OK);

        } catch (QueryException $e) {
            
            return response()->json([
               'message'=> "gagal" . $e->errorInfo
            ]);

        }
    }

    /**
     * destroy berguna untuk menghapus data berdasarkan id
     */
    public function destroy($id)
    {
        $kecamatan=Kecamatans::findOrFail($id);

       
        try {
            $kecamatan->delete();

            $response=[
                'message'=>'Data berhasil dihapus',
            ];

            return response()->json($response,Response::HTTP_OK);

        } catch (QueryException $e) {
            
            return response()->json([
               'message'=> "gagal" . $e->errorInfo
            ]);

        }
    }
}
