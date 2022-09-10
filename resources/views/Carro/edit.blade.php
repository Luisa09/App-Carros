@extends('layouts.app')

@section('content')

<h1>Editar Carro</h1>
<form action="{{ route('carros.update.route', $carro->id) }}" method="POST">
    @method('PUT')
    @csrf

    <div class="form-group">
        <label for="nombre_carro">Nombre Carro:</label>
        <input type="input" readonly class="form-control" value="{{ $carro->nombre_carro }}">
    </div>

    <div class="form-group">
        <label>Planta productora:</label>
        <input type="input" readonly class="form-control" value="{{ $carro->planta_produccion }}">
    </div>

    <div class="form-group">
        <label>Fecha ensamblaje:</label>
        <input type="date" name="fecha_ensamblaje" class="form-control" value="{{ $carro->fecha_ensamblaje }}">
    </div>

    <div class="form-group">
        <label>Modelo:</label>
        <input type="number" name="modelo" class="form-control" value="{{ $carro->modelo }}">
    </div>

    <div class="form-group">
        <label>Ciudad:</label>
        <input type="input" readonly class="form-control" value="{{ $carro->ciudad }}">
    </div>

    <button type="submit" class="btn btn-primary mt-2">Submit</button>
</form>


@endsection
