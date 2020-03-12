<?php
    require_once('../../models/database/crud/efetuar_cadastro.php');

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $senha = sha1($_POST['senha']);
    $nascimento = $_POST['nascimento'];
    $sexo = $_POST['sexo'];

    gravar($nome, $sobrenome, $email, $senha, $nascimento, $sexo);

    $_SESSION['msg'] = "Cadastro bem sucedido! Já pode fazer <a href=\"template.php?p=login\">Login</a>";
    
    header('Location: ../../template.php?p=registrar');
    exit;