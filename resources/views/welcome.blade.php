<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de productos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap 5 CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Fondo general: degradado grisáceo */
        body {
            background: linear-gradient(135deg, #f5f5f5, #e2e2e2);
        }

        /* Contenedor principal */
        .main-card {
            max-width: 1000px;
            width: 100%;
            border-radius: 24px;
            overflow: hidden;
        }

        /* Panel izquierdo: gris medio */
        .left-panel {
            background: #d1d5db; /* gris claro-medio */
        }

        /* Panel derecho: gris muy claro */
        .right-panel {
            background: #f3f4f6; /* gris muy claro */
        }

        /* Título */
        .title {
            font-weight: 800;
            letter-spacing: 0.03em;
            color: #1f2937; /* gris oscuro */
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
        }

        /* Línea decorativa debajo del título */
        .title-line {
            width: 80px;
            height: 4px;
            background: #9ca3af; /* gris medio */
            margin: 16px auto 0;
            border-radius: 999px;
        }

        /* Subtítulo opcional */
        .subtitle {
            color: #4b5563; /* gris más oscuro */
        }

        /* Botones personalizados */
        .btn-info {
            background-color: #6b7280; /* gris medio-oscuro */
            border-color: #6b7280;
        }

        .btn-info:hover {
            background-color: #4b5563;
            border-color: #4b5563;
        }

        .btn-outline-info {
            color: #6b7280;
            border-color: #6b7280;
        }

        .btn-outline-info:hover {
            background-color: #6b7280;
            color: #fff;
        }
    </style>
</head>
<body>

<div class="container vh-100 d-flex align-items-center justify-content-center">

    <div class="card shadow-lg main-card">
        <div class="row g-0">

            {{-- PANEL IZQUIERDO --}}
            <div class="col-md-6 d-flex align-items-center justify-content-center left-panel p-5">
                <div class="text-center">
                    <h1 class="title display-5 mb-2">
                        Registro de productos
                    </h1>
                    <div class="title-line"></div>
                    
                </div>
            </div>

            {{-- PANEL DERECHO --}}
            <div class="col-md-6 d-flex align-items-center justify-content-center right-panel p-5">
                @if (Route::has('login'))
                    <div class="w-100" style="max-width: 320px;">

                        @auth
                            <a href="{{ url('/dashboard') }}"
                               class="btn btn-info btn-lg w-100 text-white">
                                Ir al Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                               class="btn btn-info btn-lg w-100 mb-3 text-white">
                                Login
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                   class="btn btn-outline-info btn-lg w-100">
                                    Crear Usuario
                                </a>
                            @endif
                        @endauth

                    </div>
                @endif
            </div>

        </div>
    </div>

</div>

</body>
</html>

