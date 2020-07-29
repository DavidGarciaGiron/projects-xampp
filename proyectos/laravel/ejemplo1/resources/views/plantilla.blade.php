<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Ejemplo 1 - Plantilla Base</title>
  </head>
  <body>

    <div>
        <nav id="navbar-example2" class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Ejemplo 1</a>
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a href="{{ route('fotos') }}" class="nav-link">Fotos</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('blog') }}" class="nav-link">Blog</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="{{ route('nosotros') }}" class="nav-link">Nosotros</a>
                </li>
                <li class="nav-item dropdown">
                        <a href="{{ route('notas') }}" class="nav-link">Notas</a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="container">
        <br>
        <h3 class="text-md-center">Ejemplo 1</h3>
        <hr>
    </div>

    <div class="container">
        @yield('seccion')
    </div>

    <div class="container">
        <div class="panel panel-default">
            <br>
            <div class="panel-body alert alert-dark">
                Pagina desarrollada por David
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
