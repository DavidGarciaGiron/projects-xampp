<?php include 'partials/head.php';?>
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

                <form id="loginForm" action="validarCode.php" method="POST" role="form" class="login100-form validate-form">
					<span class="login100-form-title">
						Iniciar Sesión
					</span>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
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
                            Ingresar
                        </button>
                    </div>

                    <div class="text-center p-t-12">
						<span class="txt1">
							Olvidaste tu,
						</span>
                        <a class="txt2" href="#">
                            Usuario / Contraseña?
                        </a>
                    </div>
                    <div class="container-login100-form-btn">
                        <a class="" href="../index.php">
                            Regresar
                        </a>
                    </div>


                    <div class="text-center p-t-136">
                        <a class="txt2" href="registro.php">
                            Crear Nueva Cuenta
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>


                </form>
            </div>
        </div>
    </div>

<?php include 'partials/footer.php';?>