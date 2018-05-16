@extends('layouts.default')
@section('content')
<br>
<br>
<br>
<br>
    <h1>Temas</h1>
    @if($exito != null)
        @if($exito == 1)
            <p class="text-success" >Se ha agregado un tema</p>
        @else
            <p class="text-danger" >No se ha podido agregar tema</p>
        @endif
    @endif

    @if($borrado != null)
        @if($borrado == 1)
            <p class="text-success" >Se ha borrado un tema</p>
        @else
            <p class="text-danger" >No se ha podido borrar el tema</p>
        @endif
    @endif
    <a href="{{route('temas.create')}}">
        <button class="btn btn-primary" >Agregar tema</button>
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
            @foreach($temas as $tema)
                <tr>
                    <td>{{$tema->nombre}}</td>
                    <td>{{$tema->descripcion}}</td>
                    <td>
                        <a href="{{route('temas.edit', $tema->id)}}">
                            <button class="btn btn-primary" >Editar</button>
                        <a>
                     </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endsection