@extends('layouts.default')
@section('content')
@if(Auth::user()->idTipoUsuario == 1)
<br>
<br>
<br>
<br>
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
@endif
@if(Auth::user()->idTipoUsuario == 3)
<br>
<br>
<br>
<br>
<h1>Método de reducción</h1>
<p>Descripcion del método de reducción.</p>

<iframe width="420" height="315"
    src="https://www.youtube.com/embed/tgbNymZ7vqY">
</iframe>
<br>
<a href="../images/metodo.zip" class="btn btn-success">Download</a>
@endif
@endsection