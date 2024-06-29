<?php
// Insertar un turno
$sql = "INSERT INTO turnos (fecha, detalles) VALUES ('2024-06-30', 'Turno de noche')";
if ($conn->query($sql) === TRUE) {
    echo "Nuevo turno registrado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
