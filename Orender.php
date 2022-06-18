<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="imagenes/user.png">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="css/login.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <div class="login">
        <form action="conexion.php" method="POST" class="form" class="form">
            <h1 class="title">Iniciar Sesión</h1>
            <div class="inputcontainer">
                <input type="text" class="input" name="Email" placeholder="Correo Electronico">
                <label for="" class="label">Correo Electronico</label>
            </div>
            <div class="inputcontainer">
                <input type="password" class="input" name="contraseña" placeholder=" Contraseña ">
                <label for=" " class="label ">Contraseña</label>
            </div>
            <input type="submit" class="submit" name="IniciarSesion" value="Ingresar">
        </form>
    </div>
</body>

</html>
