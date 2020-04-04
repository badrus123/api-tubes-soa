<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
     /**
     * Instantiate a new UserController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function allProduk()
    {
        return Produk::All();
    }


}

