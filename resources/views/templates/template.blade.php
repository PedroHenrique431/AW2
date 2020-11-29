<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto AW2</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="{{url("/")}}">Projeto AW2 </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url("books")}}">Books</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url("genders")}}">Genders</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    @yield('content')

    <script src="{{url("assets/js/javascript.js")}}"></script>
</body>
</html>