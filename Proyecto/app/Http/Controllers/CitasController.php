<?php

namespace App\Http\Controllers;
use App\Models\citas;
use Illuminate\Http\Request;


class CitasController extends Controller
{
    public function guardar(Request $req){
        // var_dump($req ->all());
         $req->validate([
             "titulo"=>"required",
             "descripcion"=>"required",
             "fecha"=>"required"
         ],[
             "titulo.required"=>"Titulo es obligatorio",
             "descripcion.required"=>"Descripcion es obligatorio",
             "fecha.required"=>"La fecha es obligatorio",
             
         ]);
      citas::create([
          "titulo"=>$req->titulo,
          "descripcion"=>$req->descripcion,
          "fecha"=>$req->fecha
      ]);
      return redirect()->route("crear") ->with("mensaje", "Se guardo correctamente");
     }

     public function citaslistas(){
        $citas= citas::all();
        return View("citaslis", ["citas"=>$citas]);
    }
   
}
