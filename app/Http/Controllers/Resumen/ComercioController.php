<?php

namespace App\Http\Controllers\Resumen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComercioController extends Controller
{
    public function comercio()
    {
        return view('resumen.comercio');
    }
}
