<?php

namespace App\Http\Controllers\Configuracion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function servicios()
    {
        return view('configuracion.serviciosBases');
    }
}
