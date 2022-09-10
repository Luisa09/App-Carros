@extends('layouts.app')

@section('content')

<h1>Clientes</h1>
<a href="{{ route('clientes.create.view') }}" class="btn btn-success">Nuevo Cliente</a>
<table class="table">
    <thead>
        <tr>
            <th>Cédula</th>
            <th>Nombres</th>
            <th>Apellidos</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($clientes as $cliente)

            <tr>
                <td>{{ $cliente->cedula }}</td>
                <td>{{ $cliente->nombres }}</td>
                <td>{{ $cliente->apellidos }}</td>
            </tr>

        @endforeach
    </tbody>
</table>

@endsection
