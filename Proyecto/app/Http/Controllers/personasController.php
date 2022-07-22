<?php

namespace App\Http\Controllers;
use App\Models\personas;
use Illuminate\Http\Request;

class personasController extends Controller
{
    public function guardar(Request $req){
   // var_dump($req ->all());
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
 personas::create([
     "nombre"=>$req->nombre,
     "apparterno"=>$req->apparterno,
     "apmaterno"=>$req->apmaterno,
     "edad"=>$req->edad,
     "nacimiento"=>$req->nacimiento,
     "grados"=>$req->grados,
     "calle"=>$req->calle,
     "colonia"=>$req->colonia,
     "cp"=>$req->cp
 ]);
 return redirect()->route("listarpersonas") ->with("mensaje", "Se guardo correctamente");
}
public function lista(){
    $personas= personas::all();
    return View("lista", ["personas"=>$personas]);
}
public function editar($id){
    $persona= personas::find($id);
    return View("editar", ["persona"=>$persona]);
}
public function editap(Request $req){
   // dd($req->all());
    $persona= personas::find($req->id);
    $persona->nombre=$req->nombre;
    $persona->calle=$req->calle;
    $persona->colonia=$req->colonia;
    $persona->cp=$req->cp;
    $persona->save();
    return redirect()->route("listarpersonas", ["id"=>$req->id])->with("mensaje", "Se actualizo correctamente");
}
public function eliminap($id){
    personas::destroy($id);
    return redirect()->route("listarpersonas");
    /*return redirect()->route("listarpersonas") ->with("mensaje", "¿Estas seguro que deseas eliminar?");*/
}
}
