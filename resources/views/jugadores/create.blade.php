@extends('layouts.base')
@section('contenido')
<h1>hola mundo </h1>
@extends ('layouts.base')
@section('contenido')
<br><br><br><br>
<div class="seccion-catalogo">
    <div class="row">
        <div class="regreso  col-2">
            <a href="{{route('jugador.index')}}" class="btn btn-info"><i class="fa-solid fa-plus"></i>Regresar</a>
        </div>
        <br><br>
        <h1 class="text-center">Nuevo Jugadores</h1>
    </div>
    <br>
    <div class="row">
        <div class="col-4 m-auto">
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form id="myForm" action="{{route('jugador.store')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="form-label">
                        <h4>Nombre:</h4>
                    </label>
                    <input value="{{old('nombre')}}" type="text" class="form-control" id="nombre" name="nombre"
                        title="Nombre de categoria" required>
                    <div class="invalid-feedback">Por favor ingrese un Nombre.</div>
                    <label for="fecha_nacimiento">
                        <h4>Fecha de nacimiento:</h4>
                    </label>
                    <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
                    <div class="invalid-feedback">Por favor ingrese una fecha de nacimiento.</div>
                    <label for="nom_dorsal">
                        <h4>Nombre de Dorsal</h4>
                    </label>
                    <input type="text" class="form-control" id="nom_dorsal" name="nom_dorsal" required>
                    <label for="num_dorsal">
                        <h4>Numero de Dorsal</h4>
                    </label>
                    <input for="equipos">
                        <h4>Equipo/club</h4>
                    </input>
                    <select class="form-control" name="categoria" id="categoria">
                        @foreach($categorias as $categoria)
                            <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div >
                    <button type="submit" class="btn btn-primary">Guardar Nuevo</button>
                    <button type="reset" class="btn btn-secondary">Limpiar</button>
                </div>
            </form>
        </div>
    </div>


</div>
@endsection
@endsection