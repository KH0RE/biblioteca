<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user(Request $ingresar){
        $arreglo = [
            'name'=>$ingresar->query('name', 'Hola'),
            'email'=>$ingresar->query('email', 'yo@hotmail.com'),
            'password'=>$ingresar->query('password','123456')
    ];
       return view('user')->with($arreglo);

    }
}
