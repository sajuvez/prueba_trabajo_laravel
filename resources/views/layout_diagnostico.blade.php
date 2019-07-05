<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>@yield('title ') - ensayo.con</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="{{ asset ('css/style.css') }}" rel="stylesheet">
  </head>

  <body>

    <header>
        <!-- Fixed navbar -->
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark mt-2 ml-5 mr-5 ">
              <a class="navbar-brand" href="{{url('/proyectos')}}">IQM</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/productos') }}">Productos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/inventario')}}">Inventario</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/agregar_productos')}}">Agregar Productos</a>
                  </li>
                </ul>
                <ul class="nav navbar-nav navbar-right" ::before>
                <li class="dropdown mr-3">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                      <span class="glyphicon glyphicon-user" aria-hidden="true">

                      </span>
                      <span>Wilson</span>
                       <span class="caret">

                       </span>
                     </a>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Modificar datos </a>
                    <a class="dropdown-item" href="#">salir</a>
                  </div>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle selectorIdioma" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="glyphicon glyphicon-globe" aria-hidden="true">

                    </span> ES <span class="caret">

                    </span>
                  </a>
                  <ul class="dropdown-menu desplegableEstrecho">
                    <li>
                      <a href="?lang=es">Español</a>
                    </li>
                	</ul>
                </li>
                </ul ::after>
              </div>
            </nav>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">

      <div class="row mt-5">
        <div class="col ml-2 mr-3">

      @yield('content')

        </div>
      </div>
        <div class="col-4">
          <p>&nbsp;</p>
        </div>
      </div>

    </main>

    <footer class="footer">
      <div class="container">
        <span class="text-muted">Wilson T 2018</span>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
    </html>
