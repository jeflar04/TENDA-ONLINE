<?php
// Configuración de la conexión a la base de datos
$host = 'tenda-online.cu8fgkbcygxt.us-east-1.rds.amazonaws.com';
$user = 'admin';
$pass = 'T3nd44dm1N!';
$dbname = 'uc3rv4ntesj3rrytendaonline';

$conexion = mysqli_connect($host, $user, $pass, $dbname);

// Recepción de los datos del formulario
$nombre = $_POST['nombre'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$email = $_POST['email'];
$cantidad = $_POST['cantidad'];
$producto = $_POST['producto'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$comentario = $_POST['comentario'];

// Preparación de la consulta SQL
$sql = "INSERT INTO compras (nombre, apellido1, apellido2, email, cantidad, producto, telefono, direccion, comentario) 
VALUES ('$nombre', '$apellido1', '$apellido2', '$email', $cantidad, '$producto', '$telefono', '$direccion', '$comentario')";

//PRUEBA

$producto = $_POST['producto'];

// Crea la consulta SQL
$sql = "SELECT * FROM compras WHERE producto = '$producto'";

// Ejecuta la consulta y guarda el resultado en una variable llamada $result
$result = mysqli_query($conn, $sql);

// Verifica si la consulta devolvió algún resultado
if (mysqli_num_rows($result) == 0) {
  // Si no hay resultados, muestra un mensaje al usuario diciendo que el producto no está disponible
  echo "Lo sentimos, este producto no está disponible en este momento.";
}

// Ejecución de la consulta SQL
$resultado = mysqli_query($conexion, $sql);

// Cierre de la conexión a la base de datos
mysqli_close($conexion);
?>
<!--
CREATE TABLE compras (
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(50) NOT NULL,
  apellido1 VARCHAR(50) NOT NULL,
  apellido2 VARCHAR(50) NOT NULL,
  email VARCHAR(100) NOT NULL,
  cantidad INT(11) NOT NULL,
  producto VARCHAR(50) NOT NULL,
  telefono VARCHAR(20) NOT NULL,
  direccion TEXT NOT NULL,
  comentario TEXT
);
-->
