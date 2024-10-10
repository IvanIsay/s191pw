

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/js/app.js'])
    <title>  @yield('titulo') </title>

</head>
<body>
    
  {{-- inicia navbar --}}

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('rutainicio') }}")> Turista sin Maps </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('rutacacas') }}">Registro Clientes </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('rutaconsulta') }}">Consulta Clientes </a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
{{-- finaliza navbar --}}


    @yield('contenido')
    
</body>
</html>