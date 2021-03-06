<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>¿Quienes somos?</title>
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>



</div>
    <body>
    <nav id="navbar-example2" class="navbar navbar-light bg-light">
    <div class="container">
    <div class="row">
      <a class="btn btn-outline-secondary" href="quienes_somos">¿Quienes somos?</a>
          <ul class="nav nav-pills">
            <p>  &nbsp  </p>
            <li class="nav-item">
              <a class="btn btn-outline-info" href="/">Inicio</a>
            </li>
            <p>  &nbsp  </p>
            <li class="nav-item">
              <a class="btn btn-outline-info" href="login">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <header class="container-fluid">
      <div class="row" style="height: 500px; background-color:#45ABC6">
        <div class="col12 mx-auto d-block align-self-center text-center text-white">
          <img src="{{asset('imagenes/grupo_de_trabajo.png')}}" class="img-fluid" width="600px" alt="">
          <h1>Somos Un Grupo de Estudiantes de la Universidad Catolica Del Maule</h1>
        </div>
      </div>
    </header>
    <main class="container-fluid">
      <div class="row" style="height: 500px ; background-color:#45ABC6; ">
        <div class="col12 text-center text-justify text-white">
          <h2>Creamos un proyecto de ingenieria en Software 1</h2>
          <h4>El presente proyecto tiene como fin crear una forma más simple de poder reservar los distintos tipos de laboratorios que hay dentro de la universidad, para poder darle menos trabajo a los funcionarios, tener una forma más ordenada y controlado los horarios de uso de cada uno de estos laboratorios.</h4>
        </div>
       </div>
    </main>
</html>
