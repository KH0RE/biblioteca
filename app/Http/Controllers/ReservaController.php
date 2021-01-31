<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservaController extends Controller
{
    
    public function reserva(Request $ingresar){
        $arreglo = [
            'tiempo'=>$ingresar->query('tiempo', '24horas'),
            'fecha'=>$ingresar->query('fecha', '31/01/2021'),
        ];
       return view('reserva')->with($arreglo);

    }


}
