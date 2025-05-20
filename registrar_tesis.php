<?php
$conexion = new mysqli("localhost", "root", "Emi##34#56", "aekea");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$estatus = $_POST['estatus'];
$fecha_inicio = $_POST['fecha_inicio'];
$fecha_termino = $_POST['fecha_termino'];
$fecha_examen = $_POST['fecha_examen'];
$nombre = $_POST['nombre'];
$carrera = $_POST['carrera'];
$nivel_estudios = $_POST['nivel_estudios'];
$matricula_al = $_POST['matricula_al'];
$matricula_doc = $_POST['matricula_doc'];

$sql = "INSERT INTO tesis (
    titulo, descripcion, estatus, fecha_inicio, fecha_termino, fecha_examen,
    nombre, carrera, nivel_estudios, matricula_al, matricula_doc
) VALUES (
    '$titulo', '$descripcion', '$estatus', '$fecha_inicio', '$fecha_termino', '$fecha_examen',
    '$nombre', '$carrera', '$nivel_estudios', '$matricula_al', '$matricula_doc'
)";

if ($conexion->query($sql) === TRUE) {
    echo "Tesis registrada correctamente.";
} else {
    echo "Error al registrar la tesis: " . $conexion->error;
}

$conexion->close();
?>
