<?php
$server="localhost";
$user="root";
$pass="";
$db="tiendan";


$enlace = mysqli_connect($server, $user, $pass, $db );
if (!$enlace) {
  echo "Error en la conexion con el servidor";
}

?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="stilos.css">
	<title>
		ACCESO
	</title>
	
</head>
<body>
   
  <h1><center><div style="color:#01FCD6;"> ACOLATRONIK</div></center></h1>
<center><FONT FACE="Courier"></FONT><br><br></center>
<h2><center><div style="color:#0BECE1;"> FORMULARIO DE ACCESO </div></center></h2>
<center><FONT FACE="Courier"></FONT><br></center>
  <CENTER>
<form action="conexion.php" method="POST" enctype="multipart/form-data">
<div>
      <h2><label for="nombre"> Nombre </label>
<input type="Text" name="nombre" required placeholder="">
    </div> 

    <div>
      <h2><label for="apellido"> Apellido  </label>
<input type="Text" name="apellido" required placeholder="">
    </div>
    <div>
     <h2> <label for="ciudad">Ciudad  </label>
<input type="Text" name="ciudad" required placeholder="">

    </div>
    <div>
      <h2><label for="pais">Pais  </label>
<input type="Text" name="pais" required placeholder="">
    </div>
    <div>
      <h2><label for="telefono">Telefono  </label>
<input type="number" name="telefono" required placeholder="">

    </div>

  <a href="conexion.php"/a>
  
  
<button type="submit" name "enviar">INGRESAR</button>
  
<form>
	
</form>
</CENTER>
<script type="js/jquery-3.5.1.min.js"></script>
<script type="js/bootstrap.min.js"></script>
</body>
</html>


<?php
if (isset($_POST ['enviar'])) {
  $nombre =$_POST["nombre"];
  $apellido=$_POST["apellido"];
  $ciudad=$_POST["ciudad"];
  $pais=$_POST["pais"];
  $telefono=$_POST["telefono"];



  $insertarDatos = "INSERT INTO datos VALUES ('$nombre', '$apellido','$ciudad', '$pais','$telefono')";
  $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
  if (!$ejecutarInsertar) {
    echo "Error en la linea de sql";
  }
}

?>


