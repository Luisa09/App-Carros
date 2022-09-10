@extends('layouts.app')

@section('content')

<h1>Nuevo Carro</h1>
<form action="{{ route('carros.store.route') }}" method="POST">

    @csrf

    <div class="form-group">
        <label for="nombre_carro">Nombre Carro:</label>
        <input type="input" name="nombre_carro" class="form-control">
    </div>

    <div class="form-group">
        <label>Planta productora:</label>
        <input type="input" name="planta_producion" class="form-control">
    </div>

    <div class="form-group">
        <label>Fecha ensamblaje:</label>
        <input type="date" name="fecha_ensamblaje" class="form-control">
    </div>

    <div class="form-group">
        <label>Modelo:</label>
        <input type="number" name="modelo" class="form-control">
    </div>

    <div class="form-group">
        <label>Ciudad:</label>
        <input type="input" name="ciudad" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary mt-2">Submit</button>
</form>


@endsection
