<?php

namespace App\Http\Controllers\Resumen;

use App\Http\Controllers\Controller;
use App\Models\SinRmNacional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComercioController extends Controller
{
    public function comercio()
    {
        $rm_total = 587.9;
        $rm_depto = array(
            ['nombre'=>'Potosí', 'rm'=> 374.7, 'porcentaje'=> number_format(374.7/$rm_total*100, 2)],
            ['nombre'=>'La Paz', 'rm'=> 84.0, 'porcentaje'=> number_format(84.0/$rm_total*100, 2)],
            ['nombre'=>'Beni', 'rm'=> 52.6, 'porcentaje'=> number_format(52.6/$rm_total*100, 2)],
            ['nombre'=>'Oruro', 'rm'=> 47.8, 'porcentaje'=> number_format(47.8/$rm_total*100, 2)],
            ['nombre'=>'Santa Cruz', 'rm'=> 16.5, 'porcentaje'=> number_format(16.5/$rm_total*100, 2)],
            ['nombre'=>'Cochabamba', 'rm'=> 7.2, 'porcentaje'=> number_format(7.2/$rm_total*100, 2)],
            ['nombre'=>'Chuquisaca', 'rm'=> 4.5, 'porcentaje'=> number_format(4.5/$rm_total*100, 2)],
            ['nombre'=>'Tarija', 'rm'=> 0.5536, 'porcentaje'=> number_format(0.5536/$rm_total*100, 2)],
            ['nombre'=>'Pando', 'rm'=> 0.3092, 'porcentaje'=> number_format(0.3092/$rm_total*100, 2)],
        );

        $rm_municipio = SinRmNacional::select('cod_municipio', 'municipio_productor', 'comision', 'gob_departamental', 'gob_municipal', DB::raw('sum(total_recaudado) as total'))
                            ->groupBy('cod_municipio', 'municipio_productor','comision', 'gob_departamental', 'gob_municipal')
                            ->orderBy('total', 'DESC')
                            ->get();
        return view('resumen.comercio', compact('rm_depto', 'rm_municipio'));
    }
}
