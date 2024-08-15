@extends('layouts.app')

@section('title', 'Añadir Cliente')

@section('content')

    <h1>Nuevo Cliente</h1>

    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf

        <label for="nombres">Nombres</label>
        <input type="text" name="nombres" id="nombres" value="{{ old('nombres') }}" required>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required>

        <label for="direccion">Dirección</label>
        <input type="text" name="direccion" id="direccion" value="{{ old('direccion') }}" required>

        <label for="fono">Teléfono</label>
        <input type="text" name="fono" id="fono" value="{{ old('fono') }}" required>

        <button type="submit" class="btn">Guardar</button>

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