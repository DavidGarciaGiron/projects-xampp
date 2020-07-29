<?php include 'partials/head2.php';?>

    <style>
        .img1{
            margin-top: 100px;
        }
    </style>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="images/icon.png" alt="IMG" class="img1">
                </div>

                <form action="registroCode.php" method="POST" role="form" class="login100-form validate-form">
					<span class="login100-form-title">
						Registro de Usuarios
					</span>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: David Garcia Giron">
                        <input class="input100" type="text" name="txtNombre" placeholder="Nombre Completo" id="nombre" autofocus required>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-user-circle" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100" type="email" name="txtEmail" placeholder="Correo Electronico" id="email" autofocus required>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-address-card" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: Example">
                        <input class="input100" type="text" name="txtUsuario" placeholder="Usuario" id="usuario" autofocus required>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input class="input100" type="password" name="txtPassword" placeholder="Password" required id="password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            Registrar
                        </button>
                    </div>

                    <div class="container-login100-form-btn">
                        <a class="" href="../index.php">
                            Regresar
                        </a>
                    </div>


                    <div class="text-center p-t-136">
                        <a class="txt2" href="login.php">
                            Iniciar Sesión
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>


                </form>
            </div>
        </div>
    </div>

<?php include 'partials/footer.php';?>