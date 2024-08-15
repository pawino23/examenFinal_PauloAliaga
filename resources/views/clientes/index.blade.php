@extends('layouts.app')

@section('title', 'Clientes')

@section('content')

    <h1>Clientes</h1>

    <a href="{{ route('clientes.create') }}" class="btn">Añadir</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table>
        <thead>
            <tr>
                <th>Nombres</th>
                <th>Email</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->nombres }}</td>
                    <td>{{ $cliente->email }}</td>
                    <td>{{ $cliente->direccion }}</td>
                    <td>{{ $cliente->fono }}</td>
                    <td>
                        <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn-edit">Editar</a>
                        <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection