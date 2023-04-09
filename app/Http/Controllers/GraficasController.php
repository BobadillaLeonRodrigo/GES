<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GraficasController extends Controller
{
    public function graficos(){
        //PARA TOMA DE DATOS DE HUMEDAD
    $graficoH=\DB::Select("SELECT humedad_m FROM mediciones");
    $horas=\DB::Select("SELECT hora_m FROM mediciones ");
        //PARA TOMA DE DATOS DE TEMPERATURA
        $graficoT=\DB::Select("SELECT temperatura_m FROM mediciones");
        $hora=\DB::Select("SELECT hora_m FROM mediciones ");
            //RETORNA LA VISTA CON LOS DATOS
        return view ('reportes.grafico')
        //GRAFICA DE HUMEDAD
            ->with(['graficoH' => $graficoH])
                ->with(['horas' => $horas])
                //GRAFICA DE TEMPERATURA
                    ->with(['graficoT' => $graficoT])
                        ->with(['hora' => $hora]);
}
}
