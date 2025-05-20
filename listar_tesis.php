<?php
$conexion = new mysqli("localhost", "root", "Emi##34#56", "aekea");
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$sql = "SELECT titulo, descripcion, estatus, fecha_inicio, fecha_termino, fecha_examen, nombre, carrera, nivel_estudios, matricula_al, matricula_doc FROM tesis";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    echo "<table border='1' width='100%'>";
    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($fila["titulo"]) . "</td>";
        echo "<td>" . htmlspecialchars($fila["descripcion"]) . "</td>";
        echo "<td>" . htmlspecialchars($fila["estatus"]) . "</td>";
        echo "<td>" . htmlspecialchars($fila["fecha_inicio"]) . "</td>";
        echo "<td>" . htmlspecialchars($fila["fecha_termino"]) . "</td>";
        echo "<td>" . htmlspecialchars($fila["fecha_examen"]) . "</td>";
        echo "<td>" . htmlspecialchars($fila["nombre"]) . "</td>";
        echo "<td>" . htmlspecialchars($fila["carrera"]) . "</td>";
        echo "<td>" . htmlspecialchars($fila["nivel_estudios"]) . "</td>";
        echo "<td>" . htmlspecialchars($fila["matricula_al"]) . "</td>";
        echo "<td>" . htmlspecialchars($fila["matricula_doc"]) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No hay tesis registradas.";
}
$conexion->close();
?>
