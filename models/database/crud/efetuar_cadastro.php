<?php 
session_start();
require_once('../../models/database/conexao.php');

function gravar($nome, $sobrenome, $email, $senha, $nascimento, $sexo) {
    try {
        // 'pegar' a conexão com o BD
        $link = getConnection();
        
        // montar a query para inserir o contato no banco
        $sql = "insert into usuario(nome, sobrenome, email, senha, nascimento, sexo) values ('{$nome}','{$sobrenome}','{$email}','{$senha}', '{$nascimento}', '{$sexo}')";
        // dispara a query para o banco
        mysqli_query($link, $sql);

    } finally {
        mysqli_close($link);
    }
}
