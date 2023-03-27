<?php
require_once('/config.inc.php');
$id=$_GET["id"];


// crear conexiones
$conexion = new mysqli($servername, $username, $password, $dbname);

//listar conexiones
if($conexion->connection_error)
{
    die("Connection failed:" . $conexion->connect_error);
}
$sql = "delete from record where idRecord=".$id;

if ($conexion->query($sql) === TRUE) {
 // echo "New record created successfully"; 
 $conexion->close();
 header("Location: http://localhost/web/testBD/verTabla.php");
 exit();
} else {
  echo "Error: " . $sql . "<br>" . $conexion->error;
  $conexion->close();
}

?>