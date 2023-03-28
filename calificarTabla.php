<!DOCTYPE html>
<html>
  <head>
    <title>Calificando</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity=
"sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  <table class="table table-striped table-hover">
      <tr>
        <th>Pregunta</th>
        <th>Respuesta</th>
      </tr>
    <?php
    $tabla=$_GET["tabla"];
    $Extremo1=$_GET["extr1"];
    $Extremo2=$_GET["extr2"];
    $Correctos=0;
    for($i=1; $i <= 10; $i++){
      $resultado=$_GET["resultado".$i];
      
        $resultadousuario = $tabla * $i;
        if ($resultadousuario==$resultado)
        {
            $Correctos++;        
        }
        echo '
        <label for="pregunta">'.$tabla.'x'.
        $i.'='.$resultadousuario.' </label><br>';
    }
    echo "tabla:" . $tabla;
    echo "<BR>Calificacion:" .($Correctos*10);
    ?>
    
  </body>
</html>/