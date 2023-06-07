<!DOCTYPE html>
<html>
  <head>
    <title>Registro de Peliculas</title>
  </head>
  <body>

    <?php

    include("con_db.php");
    $consulta = "SELECT * FROM PELICULAS";
    
    $resultado = mysqli_query($conex, $consulta); 

    if($resultado){

        while($row = $resultado->fetch_array()){
            $id = $row['id'];
            $title = $row['titulo']; 
        
            ?>
        
            <div>
                <h2><?php echo $title ?></h2>
                <p>
                    <b>ID: </b> <?php echo $id ?>
                </p>    
            </div>

        
            <?php
        }

    }

    ?>
    </body>
</html>