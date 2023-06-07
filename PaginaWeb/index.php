<!DOCTYPE html>
<html>
  <head>
    <title>Registro de Películas</title>
    <link rel = "stylesheet" type = "text/css" href = "estilo.css">
  </head>
  <body>
    <div class = "reg">
       <h1>Registro de Película</h1>
      <form method="post" name = "Registrar" >
        <label for="nombre_peli">Nombre de la Película:</label>
        <input type="text" id="nombre_peli" name="nombre_peli"><br>

        <label for="indice">Número en el que se guardó:</label>
        <input type="number" id="indice" name="indice">

        <input type="submit" value="Registrar" name = "Registrar">
     </form>
    </div>
   
    <div class= "cons">
    <h2>Lista de Registros</h2>
    <form method="post" name = "Buscar">
        <label>Busca por nombre de película</label>
        <input type="text" id="titulo" name="titulo"><br>
        <input type="submit" value="Buscar" name = "Buscar">
    </form>
    </div class = "res">
    <?php
    include("registrar.php"); 
    include("consultar.php");
    
    ?>

    <div class = "all">
      <p>
        Consulta la lista completa <a href = "todas.php">aquí.<a> 
      </p>
      
    </div>

  </body>
</html>
