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
    <link href="CSS/bootstrap.css" rel="stylesheet">
    <link href="CSS/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="CSS/jumbotron-narrow.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS\font-awesome.css">
    <link rel="stylesheet" href="CSS/reg_style.css" />
</head>

<body>
    <div class="container">
        <div class="header clearfix">
            <h3 class="text-muted">Aula virtual <img src="Images/book.png" class="" alt="Cinque Terre" width="100" height="80"></h3>
            <nav class="navbar-right">

                <div class="dropdown">
                    <div class="btn-group">
                        <a href="index.html"><button type="button" class="btn btn-info">Home</button></a>
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

        <div class="container">
            <div class="row main">
                <div class="panel-heading">
                    <div class="panel-title text-center">
                        <h1 class="title">Registro</h1>
                        <hr />
                    </div>
                </div>
                <div class="main-login main-center">
                    <form class="form-horizontal" method="POST" action="register.php">

                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Your
								Name</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa"
										aria-hidden="true"></i></span> <input type="text" class="form-control" name="name" id="name" placeholder="Enter your Name" />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="cols-sm-2 control-label">Your
								Email</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i
										class="fa fa-envelope fa" aria-hidden="true"></i></span> <input type="text" class="form-control" name="email" id="email" placeholder="E-mail" />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="username" class="cols-sm-2 control-label">Username</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i
										class="fa fa-users fa" aria-hidden="true"></i></span> <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Nombre de usuario" />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">Password</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i
										class="fa fa-lock fa-lg" aria-hidden="true"></i></span> <input type="password" class="form-control" name="password" id="password" placeholder="Password" />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="confirm" class="cols-sm-2 control-label">Confirm
								Password</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i
										class="fa fa-lock fa-lg" aria-hidden="true"></i></span> <input type="password" class="form-control" name="repassword" id="repassword" placeholder="Confirm your Password" />
                                </div>
                            </div>
                        </div>
			<div class="form-group">
               <label class="control-label col-md-3" >Categorias:</label>
               <div class="col-md-6">
                 <select class="form-control col-md-6" name="categoria">
                  <?php
                  header('Content-Type: text/html;charset=utf-8');
                  include_once 'includes/bdd.php';
                  $con = crearConexion();
                  $con -> set_charset("utf-8");
                  $sql = "SELECT id_tipo, tipousr FROM tipousuario order by descripcion";
                  $result=$con->query($sql);
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo '<option value="'.$row['id_tipo'].'">'.$row['tipousr'].'</option>';
                  }
                   ?>
                  </select>
                  </div>
                        <div class="form-group ">
                            <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container text-center">
                <p>&copy; 2016 Todos los derechos reservados.</p>
                <a href="login.php"><span class="glyphicon glyphicon-log-in fa-2x" aria-hidden="true"></span></a>
                <a href="https://www.facebook.com/groups/193592334396351/"><span><i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></span></a>
                <a href="https://github.com/Polaken"><span><i class="fa fa-github fa-3x" aria-hidden="true"></i></span></a>
                <a href="https://twitter.com/Aula_virtual_ok"><span><i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i></span></a>
                <a href="https://plus.google.com/communities/104682285015405256311"><span><i class="fa fa-google-plus-square fa-3x" aria-hidden="true"></i></span></a>
                <a href="contacto.html"><span><i class="fa fa-ticket fa-3x" aria-hidden="true"></i></span></a>
            </div>
        </footer>
    </div>
    <script src="JS/jquery-3.1.1.js"></script>
    <script src="JS/bootstrap.js"></script>
    <script src="JS/ie10-viewport-bug-workaround.js"></script>
</body>

</html>
