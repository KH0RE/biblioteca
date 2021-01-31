<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibrosController extends Controller
{
    public function libro(Request $ingresar){
        $arreglo = [
            'titulo'=>$ingresar->query('titulo', 'The Hobby'),
            'editorial'=>$ingresar->query('editorial', 'Hola que hace'),
            'num_pages'=>$ingresar->query('num_pages','195pag')
    ];
       return view('libro')->with($arreglo);

    }
} 
