@extends('layouts.app')

@section('content')

<h1>Nueva Reserva</h1>
<form action="{{ route('reservas.store.route') }}" method="POST">

    @csrf

    <div class="form-group">
        <label for="nombre_carro">Cliente:</label>
        <select name="cliente_id" class="form-control">
            @foreach ($clientes as $cliente)

                <option value="{{ $cliente->id }}">{{ $cliente->nombres . $cliente->apellidos }}</option>

            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="nombre_carro">Carro:</label>
        <select name="carro_id" class="form-control">
            @foreach ($carros as $carro)

                <option value="{{ $carro->id }}">{{ $carro->nombre_carro }}</option>

            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Fecha Reserva:</label>
        <input type="date" name="fecha_reserva" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary mt-2">Submit</button>
</form>


@endsection
