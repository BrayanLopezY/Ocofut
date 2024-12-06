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
            <!-- Botón para abrir el modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Ingresar
            </button>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Guardar cambios</button>
                </div>
            </div>
            </div>
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