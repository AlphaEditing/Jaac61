<?php
// Insertar un vehículo
$sql = "INSERT INTO vehiculos (nombre, matricula) VALUES ('Javier Chica', 'ABC123')";
if ($conn->query($sql) === TRUE) {
    echo "Nuevo vehículo registrado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
