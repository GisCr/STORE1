<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="shortcut icon" type="image/png" href="{{ asset('store16.png') }}" />
    <title>S T O R E</title>

    <style>
        ul.nav li a,
        ul.nav li a:visited {
            color: #5cb85c !important;
        }

        ul.nav li a:hover,
        ul.nav li a:active {
            color: #5cb85c !important;
        }

        ul.nav li.active a {
            color: #226322 !important;
        }

    </style>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('store40.png') }}" class="img-fluid" href="/">
            S T O R E
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar ml-auto static-top nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Inicio</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ventas">Ventas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="consultaVentas">Consultar Ventas</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="form-group">
            <!-- TABLA AGREGAR -->

            <form class="px-4 py-3" method="POST" action="{{ route('productos.crear') }}">

                @csrf
                <h1>Productos</h1>
                <hr>

                <label for="name">Nombre:</label>
                <input id="name" type="text" name="name" placeholder="Nombre" class="form-control mb-2"
                    required="true" />

                <label for="precio">Precio:</label>
                <input id="precio" type="text" name="precio" placeholder="Precio" class="form-control mb-2"
                    required="true" />

                <button class="btn btn-success btn-block" type="submit">Agregar</button>

            </form>
        </div>

        @if ( session('mensaje') )
        <div class="alert alert-success">{{ session('mensaje') }}</div>
        @endif

        <div class="container">
            <!-- TABLA CONSULTA -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->precio }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
