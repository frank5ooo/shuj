<?php

$servidor = "localhost";
$nombreusuario = "ocho";
$password = "8421ocho";
$db = "ocho";
$table = "todotabla";

$connection = new mysqli($servidor, $nombreusuario, $password, $db);

if ($connection->connect_error)
{
  die("Conexión fallida: " . $connection->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS $db";

// if ($connection->query($sql) === true) 
// {
//   echo "base  correctamente.";
// } 
// else 
// {
//   die("Error al crear base de datos: " . $connection->error);
// }

$connection->select_db($db);

$sql = "CREATE TABLE IF NOT EXISTS $table 
(
  id INT(8) AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  apellido VARCHAR(100) NOT NULL,
  dni INT(8) NOT NULL,
  mail VARCHAR(100) NOT NULL
)";

/*if ($connection->query($sql))
{
  echo "La tabla se creó correctamente.";
} 
else 
{
   die("Erroralcreartabla: ".$connection->error);
}
*/
?>
