@extends('layouts.default') @section('content')
@if(Auth::user()->idTipoUsuario == 1)
<br>
<br>
<br>
<br>
<h1>Editar tema</h1>
<a href="{{route('temas.index')}}">Volver a temas</a>
@if($exito)
<p>El tema se actualizó</p>
@endif
<form method="POST" action="{{ route('temas.update',array('temas'=>$tema->id)) }}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
        <label class="form-label">Nombre:</label>
        <input class="form-control" type="text" name="txtNombre" value="{{$tema->nombre}}">
    </div>
    <div class="form-group">
        <label class="form-label">Descripción:</label>
        <input class="form-control" type="text" name="txtDescripcion" value="{{$tema->descripcion}}">
    </div>
    <button type="submit">Actualizar tema</button>
</form>
<form method="POST" action="{{route('temas.destroy', array('temas'=>$tema->id))}}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Borrar tema</button>
</form>

<div class="form-group">
    <div class="row">
        <div class="col-md-10">
            <h1>Subtemas</h1>
        </div>
        <div class="col-md-2">
            <a id="btnAgregarElemento" class="btn btn-primary" type="button" href="{{route('temas.subtemas.create', $tema->id)}}">+</a>
        </div>
    </div>
</div>
@endif


@if(Auth::user()->idTipoUsuario == 3)
<br>
<br>
<br>
<br>
<h1>Repaso para el semestral</h1>
<p>Este es un repaso para el semestral.</p>

<iframe width="420" height="315"
    src="https://www.youtube.com/embed/tgbNymZ7vqY">
</iframe>
<br>
<a href="../images/semestral.rar" class="btn btn-success">Download</a>
@endif
@endsection