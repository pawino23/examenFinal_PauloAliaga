@extends('layouts.app')

@section('title', 'Contacto')

@section('content')
    <h1>Contacto</h1>
    <form action="{{ route('contacto.send') }}" method="POST">
        @csrf
        <label for="name">Asunto</label>
        <input type="text" name="asunto" id="asunto" value="{{ old('asunto') }}" required>

        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required>
        
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required>
        
        <label for="message">Mensaje</label>
        <textarea name="message" id="message" required>{{ old('message') }}</textarea>

        <button type="submit">Enviar</button>
    </form>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
@endsection