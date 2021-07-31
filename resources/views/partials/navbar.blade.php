<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Torneo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Equipos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/equipos">Ver equipos</a>
          <a class="dropdown-item" href="/equipos/create">Nuevo equipo</a>
        </div>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Jugadores
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/jugadores">Ver jugadores</a>
            <a class="dropdown-item" href="/jugadores/create">Nuevo jugador</a>
          </div>
        </li>
    </ul>
    <a class="nav-link disabled" href="#">{{ Auth::user()->name }}</a>
    <form class="form-inline my-2 my-lg-0" action="{{ route('logout') }}" method="post">
      @csrf
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> Cerrar sesion</button>
    </form>
  </div>
</nav>
