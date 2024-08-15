<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <nav>
            <a href="#" class="navbar-logo">
                <i class="material-icons">Examen Final</i>
            </a>

            <ul>
                <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
                <li><a href="/servicios" class="{{ request()->is('servicios') ? 'active' : '' }}">Servicios</a></li>
                <li><a href="/proyectos" class="{{ request()->is('proyectos') ? 'active' : '' }}">Proyectos</a></li>
                <li><a href="/clientes" class="{{ request()->is('clientes') ? 'active' : '' }}">Clientes</a></li>
                <li><a href="/blog" class="{{ request()->is('blog') ? 'active' : '' }}">Blog</a></li>
                <li><a href="/contacto" class="{{ request()->is('contacto') ? 'active' : '' }}">Contacto</a></li>
            </ul>
        </nav>

        <div class="content">
            @yield('content')
        </div>
    </body>
</html>