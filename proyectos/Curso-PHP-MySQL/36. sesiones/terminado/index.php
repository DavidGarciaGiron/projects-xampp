<?php
include_once 'includes/user.php';
include_once 'includes/user_session.php';


$userSession = new UserSession();
$email = new User();

if(isset($_SESSION['email'])){
    //echo "hay sesion";
    $email->setUser($userSession->getCurrentUser());
    include_once 'vistas/home.php';

}else if(isset($_POST['email']) && isset($_POST['password'])){
    
    $emailForm = $_POST['email'];
    $passForm = $_POST['password'];

    $email = new User();
    if($email->userExists($emailForm, $passForm)){
        //echo "Existe el usuario";
        $userSession->setCurrentUser($emailForm);
        $email->setUser($emailForm);

        include_once 'vistas/home.php';
    }else{
        //echo "No existe el usuario";
        $errorLogin = "Nombre de usuario y/o password incorrecto";
        include_once 'vistas/login.php';
    }
}else{
    //echo "login";
    include_once 'vistas/login.php';
}



?>