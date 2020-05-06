<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Tagihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TagihanController extends Controller
{
     /**
     * Instantiate a new UserController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->tagihan = new Tagihan;

        $this->middleware('auth');
    }

    public function get_tagihan()
    {
        return response()->json([
            'success' => 'true',
            'data' => $this->tagihan->dataTagihan(Auth::user()->id)->makeHidden(['password']),
            ], 200);
    }
    public function post_tagihan(Request $request)
    {
        $this->validate($request, [
            'jumlah_tagihan' => 'required|string',
            'id_detail' => 'required|string',
        ]);

        try {

            $tagihan = new Tagihan;
            $tagihan->jumlah_tagihan = $request->input('jumlah_tagihan');
            $tagihan->id_detail = $request->input('id_detail');
            $tagihan->id_user = Auth::user()->id;

            $tagihan->save();
            //return successful response
            return response()->json(['Tagihan' => $tagihan, 'message' => 'CREATED'], 201);

        } catch (\Exception $e) {
            //return error message
            return response()->json(['message' => 'Tagihan Create Failed!'], 409);
        }
    }

}

