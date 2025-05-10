<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Información del Usuario</title>
    <link rel="stylesheet" href="../css/bulma.min.css">
    <link rel="stylesheet" href="../css/estilos.css">

</head>
<body>
    <h2 class="subtittle">Información del usuario</h2>
    <p><strong>Nombre:</strong> <?php echo htmlspecialchars($_SESSION['username']); ?></p>
    <p><strong>Rol:</strong> <?php echo htmlspecialchars($_SESSION['rol']); ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($_SESSION['email']); ?></p>
    <p><strong>Rut:</strong> <?php echo htmlspecialchars($_SESSION['rut']); ?></p>
    <button class="button is-danger mt-3" onclick="window.location.href='logout.php'">Cerrar Sesión</button>
</body>
</html>