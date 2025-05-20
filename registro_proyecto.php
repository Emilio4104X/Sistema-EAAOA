<?php
$conexion = new mysqli("localhost", "root", "Emi##34#56", "aekea");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$nombre = $_POST['nombre'];
$estatus = $_POST['estatus'];
$fecha_inicio = $_POST['fecha_inicio'];
$objetivo = $_POST['objetivo'];
$actividades_realizadas = $_POST['actividades_realizadas'];
$alumnos_participantes = $_POST['alumnos_participantes'];
$calificacion = $_POST['calificacion'];
$proyectos_hechos = $_POST['proyectos_hechos'];
$matricula_al = $_POST['matricula_al'];
$matricula_doc = $_POST['matricula_doc'];

$sql = "INSERT INTO proyecto (
    nombre, estatus, fecha_inicio, objetivo, actividades_realizadas, alumnos_participantes, calificacion, proyectos_hechos, matricula_al, matricula_doc
) VALUES (
    '$nombre', '$estatus', '$fecha_inicio', '$objetivo', '$actividades_realizadas', '$alumnos_participantes',
    '$calificacion', '$proyectos_hechos', '$matricula_al', '$matricula_doc'
)";

if ($conexion->query($sql) === TRUE) {
    echo "Proyecto registrada correctamente.";
} else {
    echo "Proyecto registrar la tesis: " . $conexion->error;
}

$conexion->close();
?>
