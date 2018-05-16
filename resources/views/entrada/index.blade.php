@extends('layouts.default') @section('content')
<br>
<br>
<br>
<br>
<h1>Información general</h1>
<div class="col-md-12">
    <p>FORMULARIO DE GEOMETRÍA ANALÍTICA
        <br>
        Formulario para que puedan resolver los ejercicios de geometría analíta.
    </p>

    <img src="../images/formulario.png" alt="Placeholder">

    <a href="../images/formulario.rar" class="btn btn-success">Download</a>

    @if(Auth::user()->idTipoUsuario == 1)
    <div>
        <br>
        <a href="{{route('edit')}}" class="btn btn-primary">Editar Información</a>
    </div>
    @endif

</div>
@endsection