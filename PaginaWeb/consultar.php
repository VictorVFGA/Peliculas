<?php 
if(include("con_db.php")){

if(isset ($_POST['Buscar'])){
 
    $titulo = trim($_POST['titulo']);
    $consulta = "SELECT * FROM PELICULAS WHERE LOWER (titulo) LIKE LOWER ('%$titulo%')";
    
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
    }else {
        ?> 
        <h1>Error :C </h1>
        <?php
    }
}
}else{

    ?> 
        <h3>No se pudo conectar a la base de datos, intente más tarde</h3>
    <?php
}


?>