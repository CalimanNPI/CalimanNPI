<?php

/***inyección SQL

recibir.php?tipo_usuario=nuevo&navegador=chrome UNION SELECT password from users where id =2
recibir.php?tipo_usuario=nuevo&navegador=chrome or 1=1

*/
//connection
$servidor = 'localhost';
$nombreUsuario = "root";
$password = '123456';
$db = 'listUsers';
$conexion = new mysqli($servidor, $nombreUsuario, $password, $db);
if ($conexion->connect_error) {
    die('error in: ' . $conexion->connect_error);
}
echo 'db is connected<br/>';

/*
$sql = "CREATE DATABASE listUsers";
if (!$conexion->query($sql)) {
    die('Error db:' . $conexion->error);
}
echo "Base de datos se creo correctamente...<br/>";

*/
$sql = "CREATE TABLE lenguajes(id INT(11) AUTO_INCREMENT PRIMARY KEY,
opcion VARCHAR(100),
votos INT)";
if (!$conexion->query($sql)) {
    die('Error al crear la tabla:' . $conexion->error);
}
echo "La  tabla se creo correctamente...<br/>";



$sql = "INSERT INTO users(name, isAdmin) VALUES( 'Pancho Perez', true)";
if (!$conexion->query($sql)) {
    die('Error al insertar datos: ' . $conexion->error);
}
echo "Se insertarión los datos correctamente...<br/>";


$sql = "SELECT * FROM users";
$resultado = $conexion->query($sql);
if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        echo $row['name'] . '<br/>';
    }
}


$sql = "UPDATE users SET isAdmin = false WHERE id = 1";
if (!$conexion->query($sql)) {
    die("Error al actualizar: " . $conexion->error);
}
echo "Se actualizo los datos...<br/>";


$sql = "DELETE FROM users WHERE id = 4";
if (!$conexion->query($sql)) {
    die("Error al eliminar" . $conexion->error);
}
echo "Se elimino el dato... <br/>";
#$conexion->close();
