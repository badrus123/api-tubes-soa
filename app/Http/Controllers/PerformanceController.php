<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Performance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerformanceController extends Controller
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

    public function getPerformance()
    {
        return Performance::All();
    }


}

