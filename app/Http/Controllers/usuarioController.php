<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuarioController extends Controller
{
    
    public function index(){
        return "hola";
    }

    public function usuarioDetalle($id,$cuenta,$clave){
        return "id={$id}<br>
            cuenta={$cuenta}<br>
            clave={$clave}<br>
    ";
    }

    public function nuevoUsuario(){
        $infoU=["nombreDeU"=>"atag102","contraseñaU"=>"C8720413","confirmarCU"=>"C8720412","correoU"=>"atag102@gmail.com"];
        return view("Nueo",[
            "infoU"=>$infoU
        ]);
    }

    public function verificarRegistro($id,$cuenta,$clave,$estado=false){
        if($estado==true){
            return "id={$id}<br>
                cuenta={$cuenta}<br>
                clave={$clave}<br>";
        }
        else if($estado==false){
            return "no se registro";
        }   
    }

    public function inicioSesion(){
        return view("InicioS");
    }
}
