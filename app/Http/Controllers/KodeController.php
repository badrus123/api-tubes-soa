<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\KodeProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KodeController extends Controller
{
     /**
     * Instantiate a new UserController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->produk = new KodeProduk;
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        // try {
            //code...
            $kode = $this->produk->searchKode($request->input('id'),$request->input('kode'));
            if ($kode == null) {
                # code...
                return response()->json(['message' => 'Kode Produk Not Found!'], 409);

            }
            else{
                return response()->json([
                    'success' => 'true',
                    'data' => $this->produk->dataKode($request->input('id'),$request->input('kode')),
                    ], 200);
            }
        // } catch (\Throwable $th) {
        //     //throw $th;
        //     return response()->json([
        //         'message' => 'error Search Produk'
        //         ], 409);
        // }
      
    }


}

