<?php
include 'conexion.php';
$conexion = conectarBD();

for ($i = 1; $i <= 10000; $i++) {
    $sql = "INSERT INTO departamentos (nombre_departamento) VALUES ('Departamento $i')";

    if ($conexion->query($sql) === TRUE) {
    } else {
        echo "Error al insertar departamento $i: " . $conexion->error . "<br>";
    }
}

$conexion->close();
