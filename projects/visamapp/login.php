<?php

    session_start();

    if (isset($_SESSION['user_id'])) {
        header('Location: /projects/TesisV2-PHP');
    }

    require 'database.php';

    if(!empty($_POST['username']) && !empty($_POST['password'])) {
        $records = $conn->prepare('SELECT id, name, email, username, password FROM users WHERE username = :username');
        $records->bindParam(':username', $_POST['username']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $message = '';

        if(count($results) > 0 && password_verify($_POST['password'], $results['password'])){
            $_SESSION['user_id'] = $results['id'];
            header('Location: /project/proyectovisam');
        } else {
            $message = 'Disculpe, sus credenciales no coinciden con la base de datos';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
    
    <?php
        require 'partials/header.php'
    ?>

    <?php
        if(!empty($message)): 
    ?>
        <p><?= $message ?></p>
    <?php
        endif;
    ?>

    <div class="container-fluid" style="margin-top: 5%; margin-left:38%;">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="loginBox">
                        <h2>Iniciar Sesión</h2>
                        <hr>
                        <img src="images/loginlogo.png" class="img-responsive" alt="Inicio de Sesión">
                        <br><br>
                        <form action="login.php" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control input-lg" name="username" placeholder="Ingrese su Nombre de Usuario">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control input-lg" name="password" placeholder="Ingrese su Contraseña">
                            </div>
                            <button type="submit" class="btn btn-success btn-block">INGRESAR</button>
                        </form>
                        <br>
                        <p><a href="#showForm" data-toggle="collapse" aria-expanded="false" aria-controls="callapse">¿No recuerdas tu Contraseña?</a></p>
                        <div class="collapse" id="showForm">
                            <div class="well">
                                <form action="login.php" method="post">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Ingrese el Correo Electronico" require>
                                    </div>
                                    <button type="submit" class="btn btn-dark">RECUPERAR</button>
                                </form>
                            </div>
                        </div>
                        <hr><p>¿No tienes cuenta? <a href="signup.php" title="Create an account">Crea Aqui</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>   
</body>
</html>