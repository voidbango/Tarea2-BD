<?php

session_start();
include("conexion.php");

$titulo = $_POST['titulo'];
$resumen = $_POST['resumen'];
$fecha_envio = $_POST['fecha_envio']; 
$contacto_autor = $_POST['contacto_autor'];

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

$sql = "INSERT INTO articulo (titulo, resumen, fecha_envio, contacto_autor) VALUES (?, ?, ?, ?)";
$stmt = $conexion->prepare($sql);

if($stmt){
    $stmt->bind_param("ssss", $titulo, $resumen, $fecha_envio, $contacto_autor);
    if($stmt->execute()){
        $stmt->close();
    }
}
$conexion->close();
?>