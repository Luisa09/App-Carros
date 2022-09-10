@extends('layouts.app')

@section('content')

<h1>Reservas</h1>
<a href="{{ route('reservas.create.view') }}" class="btn btn-success">Nueva Reserva</a>
<table class="table">
    <thead>
        <tr>
            <th>Cliente</th>
            <th>Carro</th>
            <th>Fecha Reserva</th>
            <th>¿La Reserva está Activa?</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($reservas as $reserva)

            <tr>
                <td>{{ $reserva->cliente->nombres . $reserva->cliente->apellidos }}</td>
                <td>{{ $reserva->carro->nombre_carro }}</td>
                <td>{{ $reserva->fecha_reserva }}</td>
                <td>{{ $reserva->activo ? 'Si' : 'No'  }}</td>
            </tr>

        @endforeach
    </tbody>
</table>


@endsection
