<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a modern responsive CSS framework based on Material Design by Google. ">
    <title>Fullscreen Slider - Materialize</title>
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <!--  Android 5 Chrome Color-->
    <meta name="theme-color" content="#EE6E73">
    <!-- CSS-->
    <link href="css/prism.css" rel="stylesheet">
    <link href="css/ghpages-materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body>
  <div class="slider fullscreen">
  <ul class="slides">
    <li>
      <img src="img/night.jpeg"> <!-- random image -->
      <div class="row">
        <div class="col s12 l6">
          <div class="caption">
            <h3>¿ Qué buscamos ?</h3>
            <h5>Buscamos Facilitar tanto a los candidatos y empresas el proceso de encontrar emple y colaboradores de acuerdo a las necesidades de ambos.</h5>
            <h5>Ofrecemos un servicio integral, basado en metodologías enfocadas en estudios científicos acerca del comportamiento humano,
                para poder encontrar las fortalezas de cada una dentro de sus distintas personalide¿ades y su capacidad de resolver actividades
                que emulan tareas específicas de un día laboral, de acuerdo al perfil buscado</h5>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col s12 l6">
          <form action="">
            <div class="row">
              <div class="input-field col s12">
                <input id="email" type="email" class="validate">
                <label for="email">Email</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="password" type="password" class="validate">
                <label for="password">Password</label>
              </div>
            </div>
          </form>
        </div>
      </div>
    </li>
    <li>
      <img src="img/dock.jpeg"> <!-- random image -->
      <div class="caption left-align">
        <h3>¿ Quienes Somos ?</h3>
        <h5 class="light grey-text text-lighten-3">Somors personas que no buscan saber quien eres, sino, quien puedes llegar a ser.</h5>
        
      </div>
    </li>
  </ul>
</div>

    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script>if (!window.jQuery) { document.write('<script src="bin/jquery-3.2.1.min.js"><\/script>'); }
    </script>
    <script src="js/jquery.timeago.min.js"></script>
    <script src="js/prism.js"></script>
    <script src="jade/lunr.min.js"></script>
    <script src="jade/search.js"></script>
    <script src="bin/materialize.js"></script>
    <script src="js/init.js"></script>

  </body>
</html>