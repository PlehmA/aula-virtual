<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Andres Plehm">
    <link rel="icon" href="Images\idea-genial.png">
    <title>..--|Aula virtual|--..</title>
    <link href="CSS/bootstrap.min.css" rel="stylesheet">
    <link href="CSS/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="CSS/jumbotron-narrow.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/style.css" />
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
                        <a href="index.php"><button type="button" class="btn btn-info">Home</button></a>
                        <a href="#"><button type="button" class="btn btn-info">F.A.Q.</button></a>
                    </div>
                    <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Login <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <form class="" action="user_login.php" method="POST">
                          <li role="presentation">
                              <div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span><input class="form-control" type="text" placeholder="Email address" name="user" style="padding: 4px;" required></div>
                          </li>
                          <li role="presentation">
                              <div class="input-group"><span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span><input class="form-control" type="password" placeholder="Password" name="pass" style="padding: 4px ;" required></div>
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

        <div class="container">
            <form name="frmlogin" accept-charset="utf-8" method="POST" action="login.php" class="form-signin">
                <h2 class="form-signin-heading">Sector privado</h2>
                </br>
                <label for="inputEmail" class="sr-only">Nombre de usuario</label>
                <input type="text" name="username" id="inputUser" class="form-control" placeholder="Usuario" required autofocus maxlength="80">
                </br>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <div class="checkbox">
                <label> <input type="checkbox" value="remember-me">Recordar</label>
                </div>
                </br>
                <button class="btn btn-lg btn-primary btn-block" type="submit" value="ingresar">Entrar</button>
            </form>
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
</body>
</html>
