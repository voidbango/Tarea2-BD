<!-- filepath: c:\Users\miner\OneDrive\Escritorio\Tarea1-BD-main\Tarea1-BD-main\Tarea2_BD\tarea2BD\php\login.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro</title>
</head>
<body>
    <h1>Iniciar Sesión</h1>
    <form action="procesar_login.php" method="POST">
        <label for="login_username">Usuario:</label>
        <input type="text" id="login_username" name="username" required>
        <br>
        <label for="login_password">Contraseña:</label>
        <input type="password" id="login_password" name="password" required>
        <br>
        <button type="submit">Iniciar Sesión</button>
    </form>

    <h1>Registrarse</h1>
    <form action="procesar_register.php" method="POST">
        <label for="register_rut">RUT:</label>
        <input type="text" id="register_rut" name="rut" required>
        <br>
        <label for="register_username">Usuario:</label>
        <input type="text" id="register_username" name="username" required>
        <br>
        <label for="register_password">Contraseña:</label>
        <input type="password" id="register_password" name="password" required>
        <br>
        <label for="register_role">Rol:</label>
        <select id="register_role" name="role" required>
            <option value="autor">autor</option>
            <option value="revisor">revisor</option>
        </select>
        <br>
        <label for="register_email">Email:</label>
        <input type="email" id="register_email" name="email" required>
        <br>
        <button type="submit">Registrarse</button>
    </form>
</body>
</html>