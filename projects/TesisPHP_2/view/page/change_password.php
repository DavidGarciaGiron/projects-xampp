<?php
    $conn = mysqli_connect('localhost', 'root', '', 'tesis2php');

    if (isset($_GET['token'])){
        $token = mysqli_real_escape_string($conn, $_GET['token']);
        $query = "SELECT * FROM password_reset WHERE token = '$token'";
        $run = mysqli_query($conn, $query);
        if (mysqli_num_rows($run) > 0){
            $row = mysqli_fetch_array($run);
            $token = $row['token'];
            $email = $row['email'];
        } else {
            header('location: ../../view/page/login.php');
        }
    }

    if (isset($_POST['submit'])){
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $confirmPassword = mysqli_real_escape_string($conn, $_POST['confirmPassword']);
        $options = ['cost'=>11];
        //$hashed = password_hash($password, PASSWORD_BCRYPT, $options);
        if ($password != $confirmPassword){
            echo'<script type="text/javascript">
                alert("Lo sentimos, las contraseñas no coincidieron.");
                </script>';
        }elseif (strlen($password)<6){
            echo'<script type="text/javascript">
                alert("La contraseña debe tener 6 caracteres.");
                </script>';
        }else {
            $query = "UPDATE users SET password='$password' WHERE email='$email'";
            mysqli_query($conn, $query);
            $query = "DELETE FROM password_reset WHERE email='$email'";
            mysqli_query($conn, $query);
            echo'<script type="text/javascript">
                alert("Contraseña Actualizada.");
                window.location.href="../../view/page/login.php";
                </script>';
        }
    }
?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../assets/img/icon.png">
    <title>Change_Password - Imperiun Discipulus</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<img class="wave" src="../assets/img/wave.png">
<div class="container">
    <div class="img">
        <img src="../assets/img/editable.svg">
    </div>
    <div class="login-content">
        <form action="" method="POST">
            <img src="../assets/img/security.svg">
            <h2 class="title">Cambiar Contraseña</h2>
            <h3> Hola, Ahora que sabemos tu correo: "<u><?php echo $email; ?></u>" puedes cambiar tu contraseña. </h3>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="div">
                    <h5>Nueva Contraseña</h5>
                    <input type="password" class="input" name="password" required="required">
                </div>
            </div>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="div">
                    <h5>Confirma Contraseña</h5>
                    <input type="password" class="input" name="confirmPassword" required="required">
                </div>
            </div>

            <input type="submit" name="submit" class="btn" value="Cambiar">
            <a href="../page/login.php" class="inicio">Volver a Login -></a>
        </form>
    </div>
</div>
<script type="text/javascript" src="../../controller/js/login.js"></script>
</body>
</html>