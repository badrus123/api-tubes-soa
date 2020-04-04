<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\DataOlah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OlahanController extends Controller
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

    public function index()
    {
        
        return DataOlah::All();
    }


}

