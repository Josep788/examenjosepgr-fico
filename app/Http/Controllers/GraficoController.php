<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GraficoController extends Controller
{
    public function datos(){

        $meses =  ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
        $ventas2020 = [12, 23, 5, 9, 7, 10, 4, 9, 14, 10, 3, 6];
        $ventas2021 = [10, 5, 21, 8, 7, 11, 6, 5, 12, 9, 3, 2];

        return view('grafico')
        ->with('meses', $meses)
        ->with('ventas2020', $ventas2020)
        ->with('ventas2021', $ventas2021);
    }
}
