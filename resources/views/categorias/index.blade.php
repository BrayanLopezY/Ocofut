@extends ('layouts.base')
@section('contenido')
<br><br><br><br>
<div class="seccion-catalogo">
    <h1>Categorias</h1>
    <br>
    <div class="container col-7">
        <a href="{{route('cats.create')}}" class="btn btn-info"><i class="fa-solid fa-plus"></i>Registro</a>

    </div>
    <br>
    <!--  -->
    <form action="{{route('cats.index')}}" method="GET">
    <div class="row justify-content-center">
        <div class="col-3">
            <label for="busqueda" class="form-label float-right">
                Buscar
            </label>
        </div>
        <div class="col-5">     
                <input value="{{$busqueda}}" type="text" class="form-control" id="busqueda" name="busqueda">
        </div>
    </div>
</form>
    <div class="container col-8">
        <table class="tabla-jugdor">
            <thead>
                <tr class="titulo-catalogo">
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            @foreach ($lista as $cat)


            <tbody>
                <tr class="txt-catalogo">
                    <td>
                        <p>{{$cat->nombre}}</p>
                    </td>
                    <td>
                        <a href="{{route('cats.edit',$cat->id)}}" class="btn btn-primary">Editar</a>
                        <form action="{{route('cats.destroy',$cat->id)}}" method="POST" id="form{{$cat->id}}" class="form-inline">
                            @method("DELETE")
                            @csrf
                            <a href="#" class="btn btn-danger" onclick="borrar({{$cat->id}},'{{$cat->nombre}}')">borrar</a>
                        </form>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>



    <!--  -->
</div>
<script type="text/javascript">
    function borrar(id, nombre) {
        var confirmar = confirm('Deseas borrar este registro ' + nombre + ' ?');
        if (confirmar) {
            var formulario = document.getElementById('form'+id);
            formulario.submit();
        }
    }
</script>

@endsection