@extends('layouts.default')
@section('content')
<br>
<br>
<br>
<br>
    <h1>Subtemas</h1>
    @if($exito != null)
        @if($exito == 1)
            <p class="text-success" >Se ha agregado un subtema</p>
        @else
            <p class="text-danger" >No se ha podido agregar subtema</p>
        @endif
    @endif

    @if($borrado != null)
        @if($borrado == 1)
            <p class="text-success" >Se ha borrado un subtema</p>
        @else
            <p class="text-danger" >No se ha podido borrar el subtema</p>
        @endif
    @endif
    <a href="{{route('subtemas.create')}}">
        <button class="btn btn-primary" >Agregar subtema</button>
    </a>
    <table class="table table-striped">
        <thead class="thead thead-light">
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($subtemas as $subtema)
                <tr>
                    <td>{{$subtema->nombre}}</td>
                    <td>{{$subtema->descripcion}}</td>
                    <td>
                        <a href="{{route('subtemas.edit', $subtema->id)}}">
                            <button class="btn btn-primary" >Editar</button>
                        <a>
                     </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endsection