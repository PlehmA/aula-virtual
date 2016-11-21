<?php header('Content-Type: text/html;charset=utf-8'); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="Images\idea-genial.png">
    <title>..--|Aula virtual|--..</title>
    <link href="CSS/bootstrap.min.css" rel="stylesheet">
    <link href="CSS/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="CSS/jumbotron-narrow.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/style,css">
    <link rel="stylesheet" href="CSS\font-awesome.css">
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
</head>

<body>
    <div class="container">
        <div class="header clearfix">
            <h3 class="text-muted">Aula virtual <img src="Images/book.png" class="" alt="Cinque Terre" width="100" height="80"></h3>
            <nav class="navbar-right">
                <div class="dropdown">
                    <div class="btn-group">
                      <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
                      </fb:login-button>
                      <div id="status">
                      </div>
                        <a href="#"><button type="button" class="btn btn-info">Home</button></a>
                        <a href="#"><button type="button" class="btn btn-info">F.A.Q.</button></a>
                    </div>
                    <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Login <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <form class="" action="user_login.php" method="POST">
                          <li role="presentation">
                              <div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span><input class="form-control" type="text" placeholder="Email address" name="username" style="padding: 4px;" required></div>
                          </li>
                          <li role="presentation">
                              <div class="input-group"><span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span><input class="form-control" type="password" placeholder="Password" name="password" style="padding: 4px ;" required></div>
                          </li>
                          <li>
                              <div class="checkbox">
                                  <label><input type="checkbox" value="">Recordar</label>
                              </div>
                          </li>
                          <li><button type="submit" class="btn btn-block btn-success">Submit</button></li>
                        </form>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="jumbotron">
            <h1>Bienvenidos</h1>
            <p class="lead">Esta es una oportunidad única para que quienes deseen enseñar cuenten con un espacio dinámico y moderno para exponer conceptos y conocimientos. Asimismo, los alumnos contarán con las herramientas y canales de comunicación necesarios para desarrollar
                sus potencialidades en un entorno que favorezca la adquisición de sus saberes. Bienvenido al "Aula virtual"</p>
            <p><a class="btn btn-lg btn-success" href="new_users.php" role="button">Registrese Aquí</a></p>
        </div>
        <div class="row marketing">
            <div class="col-lg-6">
                <h4>Sube tus clases</h4>
                <p>Podrás subir videos de clases para después compartirlas o ser un poco egoísta y quedártelas.</p>
                <h4>Anotaciones</h4>
                <p>Anota tus cambios, trabajos o recuerdos pendientes, así te será más fácil trabajar.</p>
                <h4>Trabajos prácticos</h4>
                <p>Puedes hacer o crear trabajos prácticos online para mejorar tu rendimiento o para pre-evaluar a un alumno/compañero.</p>
            </div>
            <div class="col-lg-6">
                <h4>Evaluaciones</h4>
                <p>Una buena manera de saber donde estoy parado es probandome y que mejor que una evaluación.</p>
                <h4>Cursos</h4>
                <p>No todo es exámenes, también aprender es divertido. Sube tu curso o ponte a leer uno.</p>
                <h4>Diviertete</h4>
                <p>No siempre seguir las reglas es sencillo pero si divertido. Presta atención y se compañero que la diversión viene sola.</p>
            </div>
        </div>
        <footer class="footer">
            <div class="container text-center">
                <p>&copy; 2016 Todos los derechos reservados.</p>
                <a href="inicio.php"><span class="glyphicon glyphicon-log-in fa-2x" aria-hidden="true"></span></a>
                <a href="https://www.facebook.com/groups/193592334396351/"><span><i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></span></a>
                <a href="https://github.com/Polaken"><span><i class="fa fa-github fa-3x" aria-hidden="true"></i></span></a>
                <a href="https://twitter.com/Aula_virtual_ok"><span><i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i></span></a>
                <a href="https://plus.google.com/communities/104682285015405256311"><span><i class="fa fa-google-plus-square fa-3x" aria-hidden="true"></i></span></a>
                <a href="contacto.php"><span><i class="fa fa-ticket fa-3x" aria-hidden="true"></i></span></a>
            </div>
        </footer>
    </div>
    <script src="JS/jquery-3.1.1.js"></script>
    <script src="JS/bootstrap.js"></script>
    <script src="JS/ie10-viewport-bug-workaround.js"></script>
    <script src="JS\fblogin.js"></script>
</body>

</html>
