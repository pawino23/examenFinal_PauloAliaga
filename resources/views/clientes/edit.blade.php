@extends('layouts.app')

@section('title', 'Editar Cliente')

@section('content')

    <h1>Editar Cliente</h1>

    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nombres">Nombres</label>
        <input type="text" name="nombres" id="nombres" value="{{ old('nombres', $cliente->nombres) }}" required>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email', $cliente->email) }}" required>

        <label for="direccion">Dirección</label>
        <input type="text" name="direccion" id="direccion" value="{{ old('direccion', $cliente->direccion) }}" required>

        <label for="fono">Teléfono</label>
        <input type="text" name="fono" id="fono" value="{{ old('fono', $cliente->fono) }}" required>

        <button type="submit" class="btn">Actualizar</button>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>

@endsection