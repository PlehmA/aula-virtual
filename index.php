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
       <?php require_once('header.php'); ?>
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
        <?php require_once('footer.php') ?>
                
                
    </div>
    <script src="JS/jquery-3.1.1.js"></script>
    <script src="JS/bootstrap.js"></script>
    <script src="JS/ie10-viewport-bug-workaround.js"></script>
    <script src="JS\fblogin.js"></script>
</body>

</html>
