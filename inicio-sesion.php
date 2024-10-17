<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo instituto_Mesa de trabajo 1.png">
    <title>Instituto Nacional Tecnico Industrial</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
            margin: 0;
        }
        .login-container {
            background-color: #fff;
            padding: 50px;
            border-radius: 15px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .login-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            border: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }
        .login-container button:hover {
            background-color: #218838;
        }
        .error-message {
            color: red;
            text-align: center;
        }
        .boton, .texto{
            text-decoration: none;
            color: #218838;
            margin-top: 20px;
        }
    </style>
</head>
<body class="" style="background-image: url(assets/images/back2.jpg);

      /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;"> 

    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <form action="login.php" method="post">
            <input type="text" name="username" placeholder="Nombre de usuario" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Iniciar sesion</button>
            <div class="boton">
                <a href="inicio.php" class="texto">Regresar a inicio</a>
            </div>
        </form>

    </div>
</body>
</html>
