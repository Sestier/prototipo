@extends('layouts.default')
@section('content')
    <h1>Nuevo subtema</h1>
    <form method="POST" action="{{route('temas.subtemas.store', $idTema)}}">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="form-label">Nombre:</label>
            <input class="form-control" type="text" name="txtNombre">
        </div>
        <div class="form-group">
            <label class="form-label">Descripción:</label>
            <input class="form-control" type="text" name="txtDescripcion">
        </div>
        <div class="form-group">
            <label class="form-label">Video:</label>
            <input class="form-control" type="text" name="txtVideo">
        </div>
        <div class="form-group">
            <label class="form-label">Documento:</label>
            <input class="form-control" type="text" name="txtDocumento">
        </div>
        <button type="submit">Agregar subtema</button>
    </form>
@endsection