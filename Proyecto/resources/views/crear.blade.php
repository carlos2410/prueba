@extends('plantilla')
@extends('layouts.app2')

@section('content')
@section('container2')
<html>
  <head>
    <title></title>
    <meta content="">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    body{
      font-family: 'Exo', sans-serif;
    }
    .header-col{
      background: #E3E9E5;
      color:#536170;
      text-align: center;
      font-size: 20px;
      font-weight: bold;
    }
    .header-calendar{
      background: #EE192D;color:white;
    }
    .box-day{
      border:1px solid #E3E9E5;
      height:150px;
    }
    .box-dayoff{
      border:1px solid #E3E9E5;
      height:150px;
      background-color: #ccd1ce;
    }
    </style>

  </head>
  <body>
    <div class="card" style="height: 30rem;">
      <h5 class="card-header">AGENDAR CITAS</h5>
      <p class="lead">
     
      <!--a class="btn btn-default"  href="{{ asset('/login') }}">Atras</a>-->
   

      @if (count($errors) > 0)
        <div class="alert alert-danger">
         <button type="button" class="close" data-dismiss="alert">×</button>
         <ul>
          @foreach ($errors->all() as $error)
           <li>{{ $error }}</li>
          @endforeach
         </ul>
        </div>
       @endif
       @if ($message = Session::get('success'))
       <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{ $message }}</strong>
       </div>
       @endif


      <div class="col-md-6">
        <form action="{{route('guardarCitas')}}" method="POST">

          @csrf
          <div class="fomr-group">
            <label>Trámite</label>
            <select class="form-select" name="titulo" id="titulo">
              <option value='' selected>-- SELECCIONA TRAMITE</option>
              <option value="Holograma">Refrendo Vehicular</option>
              <option value="Cambio">Cambio de Propietario</option>
              <option value="Reemplacamiento">Reemplacamiento</option>
              <option value="Baja">Baja -Alta  de Automovil</option>
              <option value="Licencia">Licencias de Conducir</option>
              <option value="Dotacion">Dotacion de Placas</option>
            </select>
          </div>
          <div class="fomr-group">
            <label>Descripcion del Evento</label>
            <input type="text" class="form-control" name="descripcion">
          </div>
          <div class="fomr-group">
            <label>Fecha</label>
            <input type="date" class="form-control" name="fecha">
          </div>
          <br>
          <input type="submit" class="btn btn-info" value="Guardar">
        </form>
        {{session("mensaje")}}
      </div>

    
    </div>

  </body>
</html>
@endsection