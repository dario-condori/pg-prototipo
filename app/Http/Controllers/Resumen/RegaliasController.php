<?php

namespace App\Http\Controllers\Resumen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegaliasController extends Controller
{
    public function regalias()
    {
        return view('resumen.regalias');
    }
}
