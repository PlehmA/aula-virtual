<?php
include_once('utilities.php');
$upload = false;
$upload_error = false;
$msg = '';
$msg_error = '';

//debug( $_FILES );
if( $_FILES )
{
  $uploads_directory = 'uploads/';
  $upload_file_copy = $uploads_directory . basename($_FILES['image']['name']);

  $image_file_type = pathinfo($upload_file_copy, PATHINFO_EXTENSION);

  if( $image_file_type == 'jpg' )
  {
    if( move_uploaded_file($_FILES['image']['tmp_name'], $upload_file_copy) )
    {
      $upload = true;
      $msg = 'El fichero fue cargado correctamente';
    }else{
      $upload = false;
      $upload_error = true;
      $msg_error = 'Error al cargar archivo';
    }
  }else{
      $upload = false;
      $upload_error = true;
      $msg_error = 'Tipo de fichero no permitido';
  }

}

?>
<!DOCTYPE html>
<html>
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
<a href="image_list.php"><button class="btn btn-success"> Imagenes Subidas </button></a>
<a href="#"><button class="btn btn-success"> Videos Subidos </button></a>
<div>
 
      <div>
        <h3>Carga de archivos</h3>
        <div>
          <section>
            <h5><a href="#panel1">Seleccione una imagen</a></h5>
            <?php if( $upload ){ ?>
            <div>
              <?php echo $msg; ?>
              <a href="#" ="close">&times;</a>
            </div>
            <?php } ?>
            <?php if( $upload_error ){ ?>
            <div>
              <?php echo $msg_error; ?>
              <a href="#" ="close">&times;</a>
            </div>
            <?php } ?>
            <div>
              <form method="post" enctype="multipart/form-data">
                <div>
                  
                  <div>
                    <button>            
                      <input type="file" ="file-input" name="image">Elegir archivo
                    </button>

                  </div>
                </div>
                <button type="submit" ="radius button success ">Cargar</button>
              </form>
            </div>
          </section>
        </div>
      </div>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>