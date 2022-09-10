<nav class="navbar navbar-expand-lg navbar-light bg-light" >
    <div class="container-fluid">
      <a class="navbar-brand" href="#" ><img src="https://i.pinimg.com/originals/e5/f8/d0/e5f8d0ebd65047e6e30e45299b708c35.png" style="width: 50px;
        height: 50px;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home.index.view')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('clientes.index.view')}}">Clientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('carros.index.view')}}">Carros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('reservas.index.view')}}">Reservas</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
