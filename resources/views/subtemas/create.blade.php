@extends('layouts.default')
@section('content')
    <h1>Nuevo subtema</h1>
    <form method="POST" action="{{ route('subtemas.store') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="form-label">Nombre:</label>
            <input class="form-control" type="text" name="txtNombre">
        </div>
        <div class="form-group">
            <label class="form-label">Descripción:</label>
            <input class="form-control" type="text" name="txtDescripcion">
        </div>
        <button type="submit">Agregar subtema</button>
    </form>
@endsection