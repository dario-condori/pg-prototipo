<?php

namespace App\Http\Controllers\Resumen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MuestreoController extends Controller
{
    public function muestreo()
    {
        return view('resumen.muestreo');
    }
}
