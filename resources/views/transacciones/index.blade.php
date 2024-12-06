@extends('layouts.base')
@section('contenido')
<br><br><br><br>
<div class="seccion-catalogo">
    <div class="row">
        <br><br>
        <h1 class="text-center">Transaccion</h1>
    </div>
    <br>
    <div class="row">
        <div class="col-12 m-auto">
            <!-- aqui empieza la tabla -->
            <div class="container">
                <a href="{{route('transaccion.create')}}" class="btn btn-info">Registrar</a>
            </div>
            <div class="container-fluid">
                <table class="tabla-jugdor">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Fecha</th>
                            <th>Equipo / Cub</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    @foreach ($jugadores as $jugador )


                    <tbody>
                        <tr>
                            <td>
                                <p>{{$jugador->nombre}}</p>
                            </td>
                            <td>
                                <p>{{$jugador->fecha_nacimiento}}</p>
                            </td>
                            <td>
                                <p>{{$jugador->nom_dorsal}}</p>
                            </td>
                            <td>
                                <p>{{$jugador->num_dorsal}}</p>
                            </td>
                            <td>
                                <p>{{$jugador->categoria->nombre}}</p>
                            </td>
                                    
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>

        </div>
    </div>


</div>
@endsection