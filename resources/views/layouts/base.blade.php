<html>

<head>
  <title>Futbol Ocosingo</title>
  <link rel="stylesheet" href="{{asset('css/estilo.css')}}">
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary nav">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <h3 class="tex">Inicio</h3>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse nabar" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/cats">
              <h4 class="tex">Categorias</h4>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/jugador">
              <h4 class="tex">Jugadores</h4>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/club">
              <h4 class="tex">Equipos</h4>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">
              <h4 class="tex">Nosotros</h4>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/integrantes">
              <h4 class="tex">INTEGANTES 4GT</h4>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/maps">
              <h4 class="tex">Mapas</h4>
            </a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <div class="base container">
    @yield('contenido')
  </div>
  <br><br><br></br>
  <footer class="footer">
    <p>4GT Mejore practicando con nosotros, aqui encntraras las mejores ligas de futbol de Ocosingo, Chiapas</p>
  </footer>
  <script src="{{asset('css/jquery.min.js')}}"></script>
  <script src="{{asset('css/bootstrap.bundle.min.js')}}"></script>
</body>

</html>