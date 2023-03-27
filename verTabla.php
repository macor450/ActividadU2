<!DOCTYPE html>
<html>
<body>

<?php
require_once('/config.inc.php');

$conexion = new mysqli($servername, $username, $password, $dbname);
$consulta = "select * from record";
$datos = $conexion->query($consulta);
echo "<table border=1>";
while ($registro = $datos->fetch_assoc())
{
    echo "<tr>";
    echo "<td>".$registro["idRecord"]."</td>";
    echo "<td>".$registro["nombre"]."</td>";
    echo '<td> <a herf="borrar.php?id =' $registro["idRecord"]'"> Borrar </a> </td>';
    echo "</tr>";
}
echo "</table>";   
$conexion->close();
?>
 
</body>
</html>