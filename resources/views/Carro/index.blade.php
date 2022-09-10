@extends('layouts.app')

@section('content')

<h1>Carros</h1>
<a href="{{ route('carros.create.view') }}" class="btn btn-success">Nuevo Carro</a>
<table class="table">
    <thead>
        <tr>
            <th>Nombre carro</th>
            <th>Planta productora</th>
            <th>Fecha ensamblaje</th>
            <th>Modelo</th>
            <th>Ciudad</th>
            <th>Fecha ingreso</th>
            <th>Acción</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($carros as $carro)

            <tr>
                <td>{{ $carro->nombre_carro }}</td>
                <td>{{ $carro->planta_produccion }}</td>
                <td>{{ $carro->fecha_ensamblaje }}</td>
                <td>{{ $carro->modelo }}</td>
                <td>{{ $carro->ciudad }}</td>
                <td>{{ $carro->fecha_ingreso }}</td>
                <td><a href="{{ route('carros.edit.view', $carro->id) }}" class="btn btn-warning">Editar</a></td>
            </tr>

        @endforeach
    </tbody>
</table>

@endsection
