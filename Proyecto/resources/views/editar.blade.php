@extends('plantilla')
@extends('layouts.app2')

@section('content')
@section('container2')
<!--<a href="{{route("listarpersonas")}}" class="btn-btn-primary">Ver Registros</a>-->
{{--dd($persona)--}}

<div class="card" style="height: 30rem;">
  <h5 class="card-header">ACTUALIZAR DATOS</h5>
<form action="{{route('editaPersona')}}" method="POST">
    <input type="hidden" name="id" value="{{$persona->id}}">
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
        <input type="text" class="form-control" id="inputvehiculo" name="nombre" placeholder="Nombre" value="{{$persona->nombre}}">
      </div>
      <div class="col-sm-4"> 
        <label for="inputvehiculo" class="col col-form-label">Apellido Paterno</label>
        <input type="text" class="form-control" id="inputvehiculo" name="apparterno" readonly placeholder="Apellido Paterno" value="{{$persona->apparterno}}">
      </div>
      <div class="col-sm-4"> 
        <label for="inputvehiculo" class="col col-form-label">Apellido Materno</label>
        <input type="text" class="form-control" id="inputvehiculo" name="apmaterno" readonly placeholder="Apellido Materno" value="{{$persona->apmaterno}}">
      </div>
        </div>
    <br>

    <div class="form-group row">
        <div class="col-sm-4">
        <label for="inputmodelo" class="col-form-label">Edad</label>
        <input type="text" class="form-control" id="inputmodelo" name="edad" readonly placeholder="Edad" value="{{$persona->edad}}">
      </div>
      <div class="col-sm-4">
        <label for="inputmodelo" class="col-form-label">Lugar de Nacimiento</label>
        <input type="text" class="form-control" id="inputmodelo" name="nacimiento" readonly placeholder="Lugar de Nacimiento" value="{{$persona->nacimiento}}">
      </div>
      <div class="col-sm-4">
        <label for="inputmodelo" class="col-form-label">Grados de Estudios</label>
      <select class="form-select" name="grados" id="grados" >
        <option value='' selected >-- SELECCIONA GRADOS DE ESTUDIOS</option>
        <option value="Preescolar" {{$persona->grados == 'Preescolar' ? 'selected':'' }}>Preescolar</option>
        <option value="Primaria" {{$persona->grados == 'Primaria' ? 'selected':'' }}>Primaria</option>
        <option value="Secundaria" {{$persona->grados == 'Secundaria' ? 'selected':'' }}>Secundaria</option>
        <option value="Universidad" {{$persona->grados == 'Universidad' ? 'selected':'' }}>Universidad</option>
        <option value="Licenciatura" {{$persona->grados == 'Licenciatura' ? 'selected':'' }}>Licenciatura</option>
        <option value="Maestria" {{$persona->grados == 'Maestria' ? 'selected':'' }}>Maestria</option>
        <option value="Doctorado" {{$persona->grados == 'Doctorado' ? 'selected':'' }}>Doctorado</option>
      </select>
      </div>
    </div>
    <br>
  
    <div class="form-group row">
      
      <div class="col-sm-4">
        <label for="inputPuertas" class="col col-form-label">Calle:</label>
        <input type="text" class="form-control" id="inputPuertas" name="calle" placeholder="Calle" value="{{$persona->calle}}">
      </div>
      <div class="col-sm-4">
        <label for="inputPuertas" class="col col-form-label">Colonia:</label>
        <input type="text" class="form-control" id="inputPuertas" name="colonia" placeholder="Colonia" value="{{$persona->colonia}}">
      </div>
      <div class="col-sm-4">
        <label for="inputPuertas" class="col col-form-label">Código Postal:</label>
        <input type="text" class="form-control" id="inputPuertas" name="cp" placeholder="Código Postal" value="{{$persona->cp}}">
      </div>
    </div><br>
  
    <div class="text-center">
    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
    </div>
    </div>
</div>
  </form>
</div>
  @if (Session::has("mensaje"))
  <script>
      alert("{{Session::get("mensaje")}}")
  </script>
      
  @endif
@endsection
