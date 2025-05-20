<?php
$conexion = new mysqli("localhost", "root", "Emi##34#56", "aekea");
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$sql = "SELECT matricula_al, nombre, apellido, carrera, fecha_titulacion, nivel_estudios FROM alumnos";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    echo "<table border='1' width='100%'>";
    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($fila["matricula_al"]) . "</td>";
        echo "<td>" . htmlspecialchars($fila["nombre"]) . "</td>";
        echo "<td>" . htmlspecialchars($fila["apellido"]) . "</td>";
        echo "<td>" . htmlspecialchars($fila["carrera"]) . "</td>";
        echo "<td>" . htmlspecialchars($fila["fecha_titulacion"]) . "</td>";
        echo "<td>" . htmlspecialchars($fila["nivel_estudios"]) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No hay alumnos registrados.";
}
$conexion->close();
?>
