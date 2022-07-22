<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\autos;
class autosController extends Controller
{
    public function guardar(Request $req){
        var_dump($req ->all());
        $req->validate([
            "nombre"=>"required",
            "apparterno"=>"required",
            "apmaterno"=>"required",
            "edad"=>"required",
            "nacimiento"=>"required",
            "grados"=>"required",
            "calle"=>"required",
            "colonia"=>"required",
            "cp"=>"required"
        ],[
            "nombre.required"=>"Nombre es obligatorio",
            "apparterno.required"=>"Apellido Paterno es obligatorio",
            "apmaterno.required"=>"Apellido Materno es obligatorio",
            "edad.required"=>"Edad es obligatorio",
            "nacimiento.required"=>"Lugar de Nacimiento es obligatorio",
            "grados.required"=>"Grados de estudio es obligatorio",
            "calle.required"=>"Calle es obligatorio",
            "colonia.required"=>"Colonia es obligatorio",
            "cp.required"=>"Código Postal es obligatorio",
        ]);
     autos::create([
         "nombre"=>$req->nombre,
         "apparterno"=>$req->apparterno,
         "apmaterno"=>$req->apmaterno,
         "nacimiento"=>$req->nacimiento,
         "grados"=>$req->grados,
         "calle"=>$req->calle,
         "colonia"=>$req->colonia,
         "cp"=>$req->cp
     ]);
    }
}
