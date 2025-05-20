<?php
$conexion = new mysqli("localhost", "root", "Emi##34#56", "aekea");
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$sql = "SELECT nombre, estatus, fecha_inicio, objetivo, actividades_realizadas, alumnos_participantes, calificacion, proyectos_hechos, matricula_al, matricula_doc FROM proyecto";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    echo "<table border='1' width='100%'>";
    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($fila["nombre"]) . "</td>";
        echo "<td>" . htmlspecialchars($fila["estatus"]) . "</td>";
        echo "<td>" . htmlspecialchars($fila["fecha_inicio"]) . "</td>";
        echo "<td>" . htmlspecialchars($fila["objetivo"]) . "</td>";
        echo "<td>" . htmlspecialchars($fila["actividades_realizadas"]) . "</td>";
        echo "<td>" . htmlspecialchars($fila["alumnos_participantes"]) . "</td>";
        echo "<td>" . htmlspecialchars($fila["calificacion"]) . "</td>";
        echo "<td>" . htmlspecialchars($fila["proyectos_hechos"]) . "</td>";
        echo "<td>" . htmlspecialchars($fila["matricula_al"]) . "</td>";
        echo "<td>" . htmlspecialchars($fila["matricula_doc"]) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No hay proyectos registrados.";
}
$conexion->close();
?>
