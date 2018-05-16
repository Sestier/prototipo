@extends('layouts.default') @section('content')
<br>
<br>
<br>
<br>
<h1>Información general</h1>
<div class="col-md-12">
    <p>Texto de descripción</p>

    <img src="../images/720x560.png" alt="Placeholder">
    @if(Auth::user()->idTipoUsuario == 1)
    <div>
        <br>
        <a href="{{route('edit')}}" class="btn btn-primary">Editar Información</a>
    </div>
    @endif
</div>
@endsection