<?php

namespace App\Http\Controllers\Configuracio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function listado()
    {
        return view('configuracion.usuarios');
    }
}
