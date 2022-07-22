@extends('plantilla')
@extends('layouts.app')

@section('content')
@section('container2')

<div class="card" style="height: 30rem; ">
  <h5 class="card-header">LISTA DE CITAS</h5>

{{--var_dump($personas)--}}

<h1 class="text-center"></h1>

<table  class="table table-striped table-bordered table-hover">
  <thead>
      <tr>
          <th>Tramite</th>
          <th>Descripción</th>
          <th>Fecha</th>
          <th>Editar</th>
          <th>Eliminar</th>
      </tr>
  </thead>
  <tbody>
  
    @foreach($citas as $cita)
     <tr>
         <td>{{$cita->titulo}}</td>
         <td>{{$cita->descripcion}}</td>
         <td>{{$cita->fecha}}</td>
         <td><a class="btn btn-info" href="{{route('editarcitas', ["id"=>$cita->id])}}">Editar</a></td>
         <!--td><button class="btn btn-info"><a href="{{--route('elimarpersona', ["id"=>$persona->id])--}}">Eliminar</a></button></td>-->
         <td><a class="btn btn-danger" onclick="return confirm('Estas seguro que quieres eliminar?')" href="{{route('elimarpersona', ["id"=>$cita->id])}}">Elminar</a></td>

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