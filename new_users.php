<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  </head>
  <body>
    <style>
    form
    {
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
      -webkit-transform: translate(-50%, -50%);
    }

    </style>
    <div class="container text-center">
      <h1 class="jumbotron text-center">Agregar productos</h1>
      <div class="span3">
        <form class="form-horizontal" action="save_producto.php" method="POST" accept-charset="utf-8">
          <div class="form-group text-center">
            <label class="control-label col-md-3" >Descripción: </label>
            <div class="col-md-9"><input type="text" placeholder="Descripcion" required name="descripcion"></div>
          </div>
          <div class="form-group"><label class="control-label col-md-3" >Precio: </label>
            <div class="col-md-9"><input type="text" placeholder="Precio" required name="precio"></div>
          </div>
          <div class="form-group"><label class="control-label col-md-3" >Cantidad: </label>
            <div class="col-md-9"><input type="text" placeholder="Cantidad" required name="cantidad"></div>
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
            </div>
          <div class="form-group"><label class="control-label col-md-3" hidden="Descripción"></label>
            <div class="col-md-9 text-center"><button type="submit" name="button" class="btn btn-info"><span><i class="fa fa-upload" aria-hidden="true"></i>
    </span>Agregar</button></div>
          </div>
        </form>
      </div>


    </div>
    <script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
