<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "Emi##34#56", "aekea", 3306);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Recibir datos del formulario
$matricula = $_POST['matricula'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$carrera = $_POST['carrera'];
$fecha = $_POST['fecha'];
$nivel = $_POST['nivel'];

// Insertar en tabla alumnos
$sql = "INSERT INTO alumnos (matricula_al, nombre, apellido, carrera, fecha_titulacion, nivel_estudios)
VALUES ('$matricula', '$nombre', '$apellido', '$carrera', '$fecha', '$nivel')";

if ($conexion->query($sql) === TRUE) {
    echo "Alumno registrado correctamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>
