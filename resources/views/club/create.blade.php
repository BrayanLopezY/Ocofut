@extends ('layouts.base')
@section('contenido')
<br><br><br><br>
<div class="seccion-catalogo">
    <div class="row">
        <div class="regreso  col-2">
            <a href="{{route('club.index')}}" class="btn btn-info"><i class="fa-solid fa-plus"></i>Regresar</a>
        </div>
        <br><br>
        <h1 class="text-center">Nuevo Equipo</h1>
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
            <form id="myForm" action="{{route('club.store')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="form-label">
                        <h4>Nombre:</h4>
                    </label>
                    <input value="{{old('nombre')}}" type="text" class="form-control" id="nombre" name="nombre"
                        title="Nombre de categoria" required>
                    <div class="invalid-feedback">Por favor ingrese un Nombre.</div>
                </div>
                <div class="footer">
                    <button type="submit" class="btn btn-primary">Guardar Nuevo</button>
                    <button type="reset" class="btn btn-secondary">Limpiar</button>
                </div>
            </form>
        </div>
    </div>

    
</div>
@endsection