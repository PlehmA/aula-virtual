<?php header('Content-Type: text/html;charset=utf-8'); ?>
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
    <script src='https://www.google.com/recaptcha/api.js'></script>
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
                        <li role="presentation">
                            <div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span><input class="form-control" type="text" placeholder="Email address" name="user" style="padding: 4px;"></div>
                        </li>

                        <li role="presentation">
                            <div class="input-group"><span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span><input class="form-control" type="password" placeholder="Password" name="pass" style="padding: 4px;"></div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <label><input type="checkbox" value="">Recordar</label>
                            </div>
                        </li>
                        <li><button type="submit" class="btn btn-block btn-success">Submit</button></li>
                    </ul>
                </div>
            </nav>
        </div>
        <section id="principal">
            <h1 class="text-center">Solicitud de Información</h1>
            <form method="POST" action="send.php" accept-charset="utf-8" class="form-horizontal">
                <table class="table">
                    <tbody>
                        <tr>
                            <td><label>Nombre : (*) </label></td>
                            <td><input type="text" name="nombre" id="nombre" size="40" required class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label>Empresa : </label></td>
                            <td><input type="text" name="empresa" id="empresa" size="30" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label>E-Mail : (*)</label></td>
                            <td><input type="text" name="mail" id="mail" size="50" required class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label>Consulta : (*)</label></td>
                            <td><textarea rows="20" c ols="60" id="mensaje" name="mensaje" required class="form-control"></textarea></td>
                        </tr>
                        <tr>
                            <td><input style="float: right" type="checkbox" name="novedades" class="checkbox"></td>
                            <td>¿Desea recibir información como novedades y promociones e n su correo electrónico?
                            </td>
                        </tr>
                        <tr>
                            <td><label>Ingrese el codigo: (*)</label></td>
                            <?php include_once ('includes/recaptcha.php'); ?>
                            <td><div class="g-recaptcha" data-sitekey="6LdoKQgUAAAAAL2u0Q6Se2kAmWa-mJC-TSWwNgup"></div></div></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="enviar" id="enviar" value="Enviar Solicitud" class="btn btn-info"></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </section>
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
