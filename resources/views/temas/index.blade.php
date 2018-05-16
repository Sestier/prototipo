@extends('layouts.default')
@section('content')
@if(Auth::user()->idTipoUsuario == 1)
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
    @if(Auth::user()->idTipoUsuario == 1)
    <a href="{{route('temas.create')}}">
        <button class="btn btn-primary" >Agregar tema</button>
    </a>
    @endif
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
                    @if(Auth::user()->idTipoUsuario == 1)
                    <td>
                        <a href="{{route('temas.edit', $tema->id)}}">
                            <button class="btn btn-primary" >Editar</button>
                        <a>
                     </td>
                     @endif
                     @if(Auth::user()->idTipoUsuario == 3)
                     <td>
                        <a href="{{route('temas.edit', $tema->id)}}">
                            <button class="btn btn-primary" >Ver Subtemas</button>
                        <a>
                     </td>
                     @endif
                </tr>
            @endforeach
        </tbody>
    </table>
    @endif

@if(Auth::user()->idTipoUsuario == 3)
<br>
<br>
<br>
<br>
<h1>Matemáticas</h1>
<div class="col-md-12">
    <button class="collapsible">Parcial 1</button>
    <div class="content">
        <h3>Temas</h3>
        <button class="collapsible">Sistema de ecuaciones lineales: Solución de sistemas de ecuaciones lineales 2x2</button>
        <div class="content">
        <h3>Subtemas</h3>
        <p><a href="{{route('temas.create')}}">Método de reducción</a><p>
    </div>
    </div>
    <button class="collapsible">Parcial 2</button>
    <div class="content">
        <p>Sin temas por el momento.</p>
    </div>
    <button class="collapsible">Parcial 3</button>
    <div class="content">
        <p>Sin temas por el momento.</p>
    </div>
    <button class="collapsible">Semestral</button>
    <div class="content">
        <p></p>
    </div>

</div>

@section('customStyles')
<style>
    .collapsible {
        background-color: #777;
        color: white;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
    }

    .active,
    .collapsible:hover {
        background-color: #555;
    }

    .content {
        padding: 0 18px;
        display: none;
        overflow: hidden;
        background-color: #f1f1f1;
    }
</style>
@endsection @section('customScripts')
<script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    }
</script>@endsection
@endif
@endsection


