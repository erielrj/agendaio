<?php
session_start();
require_once('../../models/database/conexao.php');
// require_once '../conexao.php';

function efetua_login($email, $senha){
    try{

        $conn = getConnection();
        
        
        $sql = "SELECT id, nome, sobrenome, email, nascimento, sexo, foto, perfil from usuario where email = :e and senha = :pass";
        $stmt = $conn->prepare($sql);
        $stmt->execute(array(":e" => $email, ":pass" => $senha));
        
        return $stmt->fetch(PDO::FETCH_ASSOC); // Retornar Array para preencher usuario

    } finally {
        $conn = null;
    }
}