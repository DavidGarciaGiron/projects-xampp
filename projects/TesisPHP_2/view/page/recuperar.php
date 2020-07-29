<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../assets/img/icon.png">
    <title>Recover - Imperiun Discipulus</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<img class="wave" src="../assets/img/wave.png">
<div class="container">
    <div class="img">
        <img src="../assets/img/password_recorver.svg">
    </div>
    <div class="login-content">
        <form action="../../controller/php_code/recuperar.php" method="POST">
            <img src="../assets/img/secure.svg">
            <h2 class="title">Recuperar Contraseña</h2>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>Ingresa tu Correo Electronico</h5>
                    <input type="email" class="input" name="email" required="required">
                </div>
            </div>
            <input type="submit" name="submit" class="btn" value="Enviar">
            <a href="../page/login.php" class="inicio">Volver a Login -></a>
        </form>
    </div>
</div>
<script type="text/javascript" src="../../controller/js/login.js"></script>
</body>
</html>