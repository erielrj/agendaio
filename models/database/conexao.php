<meta charset='utf-8'>
<?php 

define("SERVER", "localhost");
define("USER", "root");
define("PASS", "");
define("DB", "db_agendaio");
define("PORT", 3306);


function getConnection() {

    try {
        $link = new PDO("mysql:host=". SERVER .";dbname=". DB . ";charset=utf8mb4", USER,PASS);
        return $link;
    } catch (PDOException $e) {
        return "Erro: " . $e;
    }   
}