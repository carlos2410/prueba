@extends('plantilla')
@extends('layouts.app2')
@section('content')
@section('container2')

<div class="card" style="height: 30rem;">
  <h5 class="card-header">FORMULARIO DE CITAS</h5>


<center>
  <br>
<div class="form-group row">
    <!--div class="col-sm-10">
        <a class="btn btn-danger" href="{{route("listarpersonas")}}">Ver Registros</a>
    </div-->
  </div>

</center>
<form action="{{route('guardarPersonas')}}" method="POST">
    <div class="row">
        @if($errors->any())
            <div class="col m12">
                <div class="alert alert-danger fade show justify-content-center" role="alert">
                    <strong>Advertencia</strong> <p>
                        {{-- {{json_encode($errors->first())}} --}}
                    @foreach ($errors->all() as $error)
                        {{ $error }} <br>
                    @endforeach
                    </p>
                </div>
            </div>
        @endif
    </div>
    @csrf
  <br>
  <div class="abs-center"  >
    <div class="form-group row" >
      
        <div class="col-sm-4"> 
        <label for="inputvehiculo" class="col col-form-label">Nombre</label>
        <input type="text" class="form-control" id="inputvehiculo" name="nombre" placeholder="Nombre">
      </div>
      <div class="col-sm-4"> 
        <label for="inputvehiculo" class="col col-form-label">Apellido Paterno</label>
        <input type="text" class="form-control" id="inputvehiculo" name="apparterno" placeholder="Apellido Paterno">
      </div>
      <div class="col-sm-4"> 
        <label for="inputvehiculo" class="col col-form-label">Apellido Materno</label>
        <input type="text" class="form-control" id="inputvehiculo" name="apmaterno" placeholder="Apellido Materno">
      </div>
        </div>
    <br>

    <div class="form-group row">
        <div class="col-sm-4">
        <label for="inputmodelo" class="col-form-label">Edad</label>
        <input type="text" class="form-control" id="inputmodelo" name="edad" placeholder="Edad">
      </div>
      <div class="col-sm-4">
        <label for="inputmodelo" class="col-form-label">Lugar de Nacimiento</label>
        <input type="text" class="form-control" id="inputmodelo" name="nacimiento" placeholder="Lugar de Nacimiento">
      </div>
      <div class="col-sm-4">
        <label for="inputmodelo" class="col-form-label">Grados de Estudios</label>
      <select class="form-select" name="grados" id="grados">
        <option value='' selected>-- SELECCIONA GRADOS DE ESTUDIOS</option>
        <option value="Preescolar">Preescolar</option>
        <option value="Primaria">Primaria</option>
        <option value="Secundaria">Secundaria</option>
        <option value="Universidad">Universidad</option>
        <option value="Licenciatura">Licenciatura</option>
        <option value="Maestria">Maestria</option>
        <option value="Doctorado">Doctorado</option>
      </select>
      </div>
    </div>
    <br>
  
    <div class="form-group row">
      
      <div class="col-sm-4">
        <label for="inputPuertas" class="col col-form-label">Calle:</label>
        <input type="text" class="form-control" id="inputPuertas" name="calle" placeholder="Calle">
      </div>
      <div class="col-sm-4">
        <label for="inputPuertas" class="col col-form-label">Colonia:</label>
        <input type="text" class="form-control" id="inputPuertas" name="colonia" placeholder="Colonia">
      </div>
      <div class="col-sm-4">
        <label for="inputPuertas" class="col col-form-label">Código Postal:</label>
        <input type="text" class="form-control" id="inputPuertas" name="cp" placeholder="Código Postal">
      </div>
    </div><br>
  
    <div class="text-center">
    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
      <br><br>
    </div>
    </div>
</div>
  </form>
  
</div>
@endsection
