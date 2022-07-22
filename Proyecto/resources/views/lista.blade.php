@extends('plantilla')
@extends('layouts.app2')

@section('content')
@section('container2')

<div class="card" style="height: 30rem; ">
  <h5 class="card-header">LISTA DE PERSONAS</h5>

{{--var_dump($personas)--}}

<h1 class="text-center"></h1>

<table  class="table table-striped table-bordered table-hover">
  <thead>
      <tr>
          <th>Nombre</th>
          <th>Apellido Paterno</th>
          <th>Apellido Materno</th>
          <th>Edad</th>
          <th>Lugar de Nacimiento</th>
          <th>Grados de Estudio</th>
          <th>Calle</th>
          <th>Colonia</th>
          <th>Editar</th>
          <th>Eliminar</th>
      </tr>
  </thead>
  <tbody>
  
    @foreach($personas as $persona)
     <tr>
         <td>{{$persona->nombre}}</td>
         <td>{{$persona->apparterno}}</td>
         <td>{{$persona->apmaterno}}</td>
         <td>{{$persona->edad}}</td>
         <td>{{$persona->nacimiento}}</td>
         <td>{{$persona->grados}}</td>
         <td>{{$persona->calle}}</td>
         <td>{{$persona->colonia}}</td>
         <td><a class="btn btn-info" href="{{route('editarpersonas', ["id"=>$persona->id])}}">Editar</a></td>
         <!--td><button class="btn btn-info"><a href="{{--route('elimarpersona', ["id"=>$persona->id])--}}">Eliminar</a></button></td>-->
         <td><a class="btn btn-danger" onclick="return confirm('Estas seguro que quieres eliminar?')" href="{{route('elimarpersona', ["id"=>$persona->id])}}">Elminar</a></td>

     </tr>
    
    @endforeach

  </tbody>
</table>
</div>
@if (Session::has("mensaje"))
<script>
    alert("{{Session::get("mensaje")}}")

  
  
  
</script>

@endif
    
@endsection