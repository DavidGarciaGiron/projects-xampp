<?php
    $conn = mysqli_connect('localhost', 'root', '', 'tesis2php');
    if (isset($_POST['submit'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $query = "SELECT * FROM users WHERE email='$email'";
        $run = mysqli_query($conn, $query);
        if (mysqli_num_rows($run) > 0){
            $row = mysqli_fetch_array($run);
            $db_email = $row['email'];
            $db_id = $row["id_user"];
            $token = uniqid(md5(time())); //this is random token.
            $query = "INSERT INTO password_reset (id, email, token) VALUES (NULL, '$email', '$token')";
            if (mysqli_query($conn, $query)){
                $to = $db_email;
                $subject = "Password reset link";
                $message = "Click <a src='http://localhost/projects/TesisPHP_2/view/page/change_password.php?$token'>
                            here </a> to reset your password. ";
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers = "Content-type:text/html;charset=UTF-8" . "\r\n";
                $headers = 'From: <demo@demo.com>' . "\r\n";

                mail($to, $subject, $message, $headers);
                //I am commenting this mail function because im on localhost and  we cannot use send php mail
                // function on localhost without smtp. But you run on live server the php mail function
                // will work and send the link to email.
                echo'<script type="text/javascript">
                alert("Enlace de restablecimiento de contraseña se ha enviado al correo electrónico.");
                window.location.href="../../view/page/recuperar.php";
                </script>';

            }
        } else {
            echo'<script type="text/javascript">
                alert("Usuario no Encontrado.");
                window.location.href="../../view/page/recuperar.php";
                </script>';
        }
    }
?>