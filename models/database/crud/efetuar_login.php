<?php
session_start();
require_once('../../models/database/conexao.php');

function efetua_login($email, $senha){
    try{
        $link = getConnection();

        $sql = "select id, nome, sobrenome, email, nascimento, sexo, foto, perfil from usuario where email = '{$email}' and senha = '{$senha}';";
    
        $result = mysqli_query($link, $sql);

        return mysqli_fetch_assoc($result);

    } finally {
        mysqli_close($link);
    }
}