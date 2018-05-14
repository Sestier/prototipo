@extends('layouts.default')
@section('content')
    <h1>Nuevo tema</h1>
    <form method="POST" action="{{ route('temas.store') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="form-label">Nombre:</label>
            <input class="form-control" type="text" name="txtNombre">
        </div>
        <div class="form-group">
            <label class="form-label">Descripción:</label>
            <input class="form-control" type="text" name="txtDescripcion">
        </div>
        <button type="submit">Agregar tema</button>
    </form>
@endsection