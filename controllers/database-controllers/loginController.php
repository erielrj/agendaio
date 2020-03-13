<?php
    require_once('../../models/database/crud/efetuar_login.php');
    
    $email = $_POST['email']; 
    $senha = $_POST['senha'];

    $senha = sha1($senha); //sha1
   
    if($_SESSION["usuario"] = efetua_login($email, $senha)) :
        $_SESSION["msg"] = "Login efetuado pelo usuário: {$email}";
        $location = 'home';
    else :
        $_SESSION["msg"] = "Falha ao efetuar login. Verifique o usuário/senha";
        $location = 'login';
        unset($_SESSION['usuario']);
    endif;

    header("Location: ../../template.php?p={$location}");
    exit;