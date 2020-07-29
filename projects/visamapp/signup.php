<?php
    require 'database.php';

    $message = '';

    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])){
       if($_POST['password'] == $_POST['confirmPassword']){
            $sql = "INSERT INTO users (name, email, username, password) VALUES (:name, :email, :username, :password)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':name',$_POST['name']);
            $stmt->bindParam(':email',$_POST['email']);
            $stmt->bindParam(':username',$_POST['username']);
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $stmt->bindParam(':password',$password);

            if ($stmt->execute()) {
                $message = 'Perfecto, usuario creado exitosamente';
            }else {
                $message = 'Disculpe, ocurrio un problema al crear su cuenta';
            }
       }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SignUp</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
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
    
    <div class="container" style="margin-top: 2%;">
        <div class="row">
            <div class="col-md-12">
                <h2>Registro</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h4>Crear una Nueva Cuenta</h4>
                <hr>
                
                <form action="signup.php" method="post">
                    <div class="form-group">
                    <input type="text" class="form-control form-control-sm" name="name" placeholder="Ingrese su Nombre Completo" require>
                    </div>
                    <div class="form-group">
                    <input type="text" class="form-control form-control-sm" name="email" placeholder="Ingrese su Correo Electronico" require>
                    </div>
                    <div class="form-group">
                    <input type="text" class="form-control form-control-sm" name="username" placeholder="Ingrese su Nombre de Usuario" require>
                    </div>
                    <div class="form-group">
                    <input type="password" class="form-control form-control-sm" name="password" placeholder="Ingrese su Contraseña Segura" require>
                    </div>
                    <div class="form-group">
                    <input type="password" class="form-control form-control-sm" name="confirmPassword" placeholder="Cofirme Contraseña" require>
                    </div>
            
                    <button type="submit" class="btn btn-info btn-block">REGISTRAR</button>
                </form>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h4>Iniciar Sesión</h4>
                <hr>
                <p>¿Ya tienes una cuenta? <a href="login.php" title="Login Here">Inicia Aqui</a></p>
            </div>
        </div>
    </div>

</body>
</html>