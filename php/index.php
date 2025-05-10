<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Congresos Ltda</title>
    <link rel="stylesheet" href="./css/bulma.min.css">
</head>
<body>
    <section class="section">
        <div class="container">
            <h1 class="title has text-centered">Bienvenido a Congresos Ltda</h1>

            <!-- BUSCADOR -->
            <div class="columns is vcentered mt-6">
                <div class="column is -8">
                    <form action="pagina_busqueda.php" method="GET">
                        <div class="field has-addons">
                            <div class="control is-expanded">
                                <input class="input" type="text" placeholder="Buscar..." name="search" required>
                            </div>
                            <div class="control">
                                <button class="button is-info" type="submit">Buscar</button>
                            </div>
                        </div>
                    </form>
                </div>
            <div clas="column is-4">
                <div class="box">
                    <h2 class="subtittle">Informacion del usuario</h2>
                    <p><strong>Nombre:</strong> <?php echo htmlspecialchars($_SESSION['username']); ?></p>
                    <p><strong>Rol:</strong> <?php echo htmlspecialchars($_SESSION['rol']); ?></p>
                    <p><strong>Email:</strong> <?php echo htmlspecialchars($_SESSION['email']); ?></p>
                    <p><strong>Rut:</strong> <?php echo htmlspecialchars($_SESSION['rut']); ?></p>
                    <button class="button is-danger mt-3" onclick="window.location.href='login.php'">Cerrar Sesión</button>
                    </div>
            </div>
        </div>
    </section>
</body>
</html>