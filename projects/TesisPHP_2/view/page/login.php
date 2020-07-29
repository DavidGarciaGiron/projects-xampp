<?php
    include '../partials/login/head_login.php';
?>
<body>
    <img class="wave" src="../assets/img/wave.png">
    <div class="container">
        <div class="img">
            <img src="../assets/img/enseñando.svg">
        </div>
        <div class="login-content">
            <form id="loginForm" action="../../controller/php_code/validarcode.php" method="POST" role="form">
                <img src="../assets/img/avatar.svg">
                <h2 class="title">Bienvenido</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Correo Electronico</h5>
                        <input type="email" class="input" name="txtEmail" id="email" required="required">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Contraseña</h5>
                        <input type="password" class="input" name="txtPassword" id="password" required="required">
                    </div>
                </div>
                <a href="../../controller/php_code/recuperar.php">¿Olvidaste tu Contraseña?</a>
                <input type="submit" class="btn" value="Login">
                <a href="../../page/home.php" class="inicio">Volver a Home -></a>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="../../controller/js/login.js"></script>
    
<?php include '../partials/login/footer_login.php';?>