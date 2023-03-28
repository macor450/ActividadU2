<!DOCTYPE html>
<html>
  <head>
    <title>Procesando el Formulario1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

<!--esto no se toca aun-->
  <form action="calificarTabla.php"method="get">
    <?php
    $tabla=$_GET["tabla"];
    echo'
    <input class= "form-label" type="hidden" id="tabla" name="tabla"
    value="'.$tabla.'">';
    $Extremo1=$_GET["extr1"];
    echo'
    <input class= "form-label" type="hidden" id="extr1" name="ext1"
    value="'.$Extremo1.'">';
    $Extremo2=$_GET["extr2"];
   /*echo'
    <input class= "form-label" type="hidden" id="extr2" name="extr2"
    value="'.$Extremo2.'">';
    $nombre=$_GET["Nombre"];
    echo'
    <input class= "form-label" type="hidden" id="nombre" name="nombre"
    value="'.$nombre.'">';
    $correo=$_GET["Correo"];
    echo'
    <input class= "form-label" type="hidden" id="tabla" name="tabla"
    value="'.$correo.'">';*/
    if ($Extremo1>=$Extremo2)
    {
      for ($i=$Extremo2; $i <=$Extremo1; $i++)
      echo '
    <input type= "hidden" id="tabla" 
    name= "tabla" value="'.$tabla.'">
    '; 
    }

    else
    {
      for ($i=$Extremo1; $i <=$Extremo2; $i++)
      echo '
        <label for="pregunta">'.$tabla.'x'
        .$i.';</label>
        <input type="text" id="resultado'
        .$i.'"name="resultado'.$i.'"
        value=""><br>
        ';
    }

  
    /*for ($i=1; $i <= 10; $i++) {
        echo '
        <label for="pregunta">'.$tabla.'x'
        .$i.';</label>
        <input type="text" id="resultado'
        .$i.'"name="resultado'.$i.'"
        value=""><br>
        ';}*/

        ?>
        <input class="btn btn-outline-info" type="submit" value="Calificar">
    <!--<input type= "hidden" id="tabla" 
    name= "tabla" value="'.$tabla.'">; -->
    
    
  </form>
 </body>
 </html> 