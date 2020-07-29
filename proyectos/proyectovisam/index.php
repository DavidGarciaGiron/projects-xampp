<?php
    session_start();

    require 'database.php';

    if(isset($_SESSION['user_id'])) {
        $records = $conn->prepare('SELECT id, name, email, username, password FROM users WHERE id = :id');
        $records->bindParam(':id', $_SESSION['user_id']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $user = null;

        if(count($results) > 0) {
            $user = $results;
        }
    }
    
?>

<?php
    require 'database.php';
    

    $message = '';

    if (!empty($_POST['name_unit']) && !empty($_POST['name_point'])
       && !empty($_POST['source']) && !empty($_POST['authorization'])
       && !empty($_POST['surveillance_period']) && !empty($_POST['start']) 
       && !empty($_POST['flow']) && !empty($_POST['volume'])){
       
            $sql = "INSERT INTO datosgenerales (name_unit, name_point, source, authorization, surveillance_period, start, flow, volume) VALUES (:name_unit, :name_point, :source, :authorization, :surveillance_period, :start, :flow, :volume)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':name_unit',$_POST['name_unit']);
            $stmt->bindParam(':name_point',$_POST['name_point']);
            $stmt->bindParam(':source',$_POST['source']);
            $stmt->bindParam(':authorization',$_POST['authorization']);
            $stmt->bindParam(':surveillance_period',$_POST['surveillance_period']);
            $stmt->bindParam(':start',$_POST['start']);
            $stmt->bindParam(':flow',$_POST['flow']);
            $stmt->bindParam(':volume',$_POST['volume']);

            if ($stmt->execute()) {
                $message = 'Perfecto, usuario creado exitosamente';
            }else {
                $message = 'Disculpe, ocurrio un problema al crear su cuenta';
            }
    }
?>

<?php
    include_once 'database.php';

    $sql = $conn->prepare('SELECT * FROM datosgenerales ORDER BY id DESC');
    $sql->execute();
    $result = $sql->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido a Visam App</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet"> <!--load all styles -->
    <!-- reference your copy Font Awesome here (from our CDN or by hosting yourself) -->
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
    
</head>
<body>

    <?php
        if(!empty($user)): 
    ?>

    <?php 
        require 'partials/header2.php';

        require 'home.php';
    ?>

    <?php else: ?>
    
    <?php 
        require 'partials/header.php'    
    ?>
            
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="" style="padding-left: 40%;">
                    <h2>Proyecto Visam</h2>
                    
                </div>
                <hr>
                <div class="text-center">
                    <img src="images/aguaportada.jpg" 
                         type="image/svg+xml" 
                         class="img-fluid img-thumbnail rounded mx-auto d-block" 
                         style="width: 60%;"
                         alt="Responsive image">                   
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <a href="signup.php" class="btn btn-primary btn-lg btn-block">Registrarse</a>
                    </div>
                    <div class="col-md-6">
                        <a href="login.php" class="btn btn-success btn-lg btn-block">Inicio de Sesión</a>
                    </div>
                </div>
            </div>            
        </div>
    </div>

    <?php endif; ?>
    <script src="js/main.js"></script>
</body>
</html>