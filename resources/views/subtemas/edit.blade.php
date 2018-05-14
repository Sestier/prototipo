@extends('layouts.default')
@section('content')
    <h1>Editar subtema</h1>
    <a href="{{route('temas.index')}}">Volver a subtemas</a>
    @if($exito)
        <p>El subtema se actualizó</p>
    @endif
    <form method="POST" action="{{ route('subtemas.update',array('subtemas'=>$subtema->id)) }}">
        {{ csrf_field() }}
        <input type="hidden" name= "_method" value="PUT">
        <div class="form-group">
            <label class="form-label" >Nombre:</label>
            <input class="form-control" type="text" name="txtNombre" value="{{$subtema->nombre}}">
        </div>
        <div class="form-group">
            <label class="form-label" >Descripción:</label>
            <input class="form-control" type="text" name="txtDescripcion" value="{{$subtema->descripcion}}">
        </div>
        <button type="submit">Actualizar subtema</button>
    </form>
    <form method="POST" action="{{route('subtemas.destroy', array('subtemas'=>$subtema->id))}}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit">Borrar subtema</button>
    </form>
@endsection