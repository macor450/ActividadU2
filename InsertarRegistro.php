<?php
$nombre=$_GET["txtnombre"];
$correo=$_GET["txtCorreo"];
$inicio=$_GET["txtInicio"];
$fin=$_GET["txtFin"];
$calificacion=$_GET["txtCalificacion"];
$tabla=$_GET["txtTabla"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tecmonclova";

// crear conexiones
$conexion = new mysqli($servername, $username, $password, $dbname);

//listar conexiones
if($conexion->connect_error)
{
    die("connection failed:" . $conexion->connect_error);
}
$sql = "INSERT INTO records( tabla, inicio, fin, calificacion, nombre, correo) VALUES 
(".$tabla.",".$inicio.",".$fin.",".$calificacion.",".$nombre.",".$correo.")";

if ($conexion->query($sql) === TRUE) {
 // echo "New record created successfully"; 
 $conexion->close();
 //header("Location: http://localhost/web/testBD/verTabla.html");
 exit();
} else {
  echo "Error: " . $sql . "<br>" . $conexion->error;
  $conexion->close();
}

?>