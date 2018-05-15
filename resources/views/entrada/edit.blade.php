@extends('layouts.default') @section('content')
<h1>Editar informacion General</h1>
<a href="{{route('entrada.index')}}">Volver a informacion general</a>
@if($exito)
<p>La informacion se actualizó</p>
@endif
<form method="POST" action="{{route('entrada.update',array('entrada'=>$entrada->id))}}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
        <label class="form-label">Titulo:</label>
        <input class="form-control" type="text" name="txtNombre" value="{{$tema->nombre}}">
    </div>
    <div class="form-group">
        <label class="form-label">Descripción:</label>
        <input class="form-control" type="text" name="txtDescripcion" value="{{$tema->descripcion}}">
    </div>
    <div class="form-group">
        <label class="form-label">Imagen:</label>
        <input class="form-control" type="file" name="imgImagenGeneral" value="{{$tema->descripcion}}">
    </div>
    <div class="form-group">
        <label class="form-label">Documento:</label>
        <input class="form-control" type="file" name="docDocumento" value="{{$tema->descripcion}}">
    </div>
    <button type="submit">Actualizar informacion</button>
</form>

<!--<form method="POST" action="{{route('temas.destroy', array('temas'=>$tema->id))}}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Borrar </button>
</form>-->
@endsection