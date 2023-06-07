<?php
// Configuración de la conexión a la base de datos
$db_host = 'db';
$db_user = 'root';
$db_pass = '12345678';
$db_name = 'PELIS';

// Intentamos conectar a la base de datos

try {
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
    if ($conn->connect_errno) {
        throw new Exception("No se pudo conectar a la base de datos: " . $conn->connect_error);
    }
} catch (Exception $e) {
    $men =  "Error al conectarse a la base de datos: " . $e->getMessage();
}


// Verificamos si se pudo conectar o no
if (!$conn ) {
    $mensaje = "No se pudo conectar a la base de datos.";
} else {
    $mensaje = "Conexión a la base de datos exitosa.";
}

// Cerramos la conexión a la base de datos
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Verificar conexión a la base de datos</title>
</head>
<body>
    <h1><?php echo $mensaje; 
    
    echo $men?></h1>
</body>
</html>
