<?php 

if(include("con_db.php")){ 

if(isset($_POST['Registrar'])){
    if(strlen($_POST['nombre_peli']) >= 1 && strlen($_POST['indice'])>=1){
        
        $titulo = trim($_POST['nombre_peli']);
        $index = $_POST['indice'];

        $consulta = "SELECT * FROM PELICULAS WHERE ID='$index'";
        $resultado = mysqli_query($conex, $consulta);

        if (mysqli_num_rows($resultado) > 0) {
        // Si la consulta devuelve resultados, significa que el ID ya está en uso
            ?> 
                <h3>El ID ya está en uso</h3>
            <?php
        }else{
            $consulta = "INSERT INTO PELICULAS VALUES ('$index','$titulo')"; 
            $resultado = mysqli_query($conex, $consulta); 

            if($resultado){
                ?> 
                    <h3>Registro Exitoso</h3>
                <?php
            }else{
                ?> 
                    <h3>Registro Fallido</h3>
                <?php
            }
        }

    }else{
        ?> 
                <h3>Debes llenar los datos</h3>
            <?php
    }
    
}
}else{
    ?>
        <h3>Error al conectar</h3>
    <?php
}

?>