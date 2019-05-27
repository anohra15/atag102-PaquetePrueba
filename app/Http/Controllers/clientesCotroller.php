<?php

namespace App\Http\Controllers;

use App\Usuarios2;
use Illuminate\Http\Request;
use database\seeds\usersSeeder;

class clientesCotroller extends Controller
{
    public function registro(){
        return view('registro');
    }

    public function guardar(Request $req){
        $datos=$req->all();
        $usuario2=New Usuarios2;
        $usuario2->username=$req->userName;
        $usuario2->email=$req->email;
        $usuario2->clave=$req->pwd;
        $usuario2->save();
        return dd($datos);
    }
}
