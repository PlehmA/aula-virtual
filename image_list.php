<?php
include_once('utilities.php');
$d = dir("./uploads");
?>
<!doctype html>
<html class="no-js" lang="en">
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
 
      <div class="large-9 columns">
        <h3>Listado de imágenes cargadas</h3>
        <div class="section-container tabs" data-section>
          <section class="section">
            <h5 class="title"><a href="#panel1">Uploads</a></h5>
            <div class="container" data-slug="panel1">
            	<table class="table">
				  <thead>
				    <tr>
				      <th width="200">Imagen</th>
				      <th>Nombre del archivo</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php 
				  	while (false !== ($entry = $d->read())) 
				  	{
				  		if( $entry != '.' && $entry != '..' )
				  		{
				  	?>
				    <tr>
				      <td><img src="uploads/<?php echo $entry; ?>" width="100" /></td>
				      <td><?php echo $entry; ?></td>
				    </tr>
				    <?php 
				    	}
					} 
					?>
				  </tbody>
				</table>
            </div>
          </section>
        </div>
      </div>
    

    <?php require_once('footer.php'); ?>