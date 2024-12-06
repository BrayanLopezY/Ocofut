@extends('layouts.base')
@section('contenido')
<br><br><br><br>
<div class="seccion-catalogo">
    <div class="row">
        <br><br>
        <h1 class="text-center">Club / Equipos</h1>
    </div>
    <br>
    <div class="row">
        <div class="col-7 m-auto">
            <div class="container">
                <a href="{{route('club.create')}}" class="btn btn-info"><i class="fa-solid fa-plus"></i>Registro</a>

            </div>
            <table class="tabla-jugdor">
                <thead>
                    <tr class="titulo-catalogo">
                        <th>
                            <h4>nombre</h4>
                        </th>
                        <th>
                            <h4>acciones</h4>
                        </th>
                    </tr>
                </thead>
                @foreach ($club as $clubs)
                <tbody>
                    <tr class="txt-catalogo">
                        <td>
                            <p class="">{{$clubs->nombre}}</p>
                        </td>
                        <td class="col-3">
                            <a href="#" class="btn btn-primary">Editar</a>
                            <a href="#" class="btn btn-danger">Borrar</a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>


</div>
@endsection