<?php

namespace App\Http\Controllers\Resumen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    public function estado()
    {
        return view('resumen.estado');
    }
}
