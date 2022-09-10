@extends('layouts.app')

@section('content')

<h1>Nuevo cliente</h1>
<form action="{{ route('clientes.store.route') }}" method="POST">

    @csrf

    <div class="form-group">
        <label for="nombre_carro">Cedula:</label>
        <input type="input" name="cedula" class="form-control">
    </div>

    <div class="form-group">
        <label>Nombres:</label>
        <input type="input" name="nombres" class="form-control">
    </div>

    <div class="form-group">
        <label>Apellidos:</label>
        <input type="input" name="apellidos" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary mt-2">Submit</button>
</form>


@endsection
