@extends('layouts.default')
@section('content')
@if(Auth::user()->idTipoUsuario == 3)
<br>
<br>
<br>
<br>
<h1>Usuarios</h1>
<a href="{{route('usuarios.create')}}">
    <button class="btn btn-primary ">Crear usuario</button>
</a>

<table class="table table-stripped">
    <thead>
        <tr>
            <th>Usuario</th>
            <th>Tipo</th>
            <th>Contraseña<th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $usuario)
            <tr>
                <td>{{$usuario->email}}</td>
                <td>{{$tiposUsuario[$usuario->idTipoUsuario]}}</td>
                <td>{{$usuario->password}}</td>
                <td><button class="btn btn-primary">Editar</button></td>
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
<h1>Repaso para el semestral</h1>
<p>Este es un repaso para el semestral.</p>

<iframe width="420" height="315"
    src="https://www.youtube.com/embed/tgbNymZ7vqY">
</iframe>
<br>
<a href="../images/semestral.rar" class="btn btn-success">Download</a>
@endif
@endsection