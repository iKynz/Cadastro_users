<?php

// CONEXÃO
function connection(){
    $host = "localhost";
    $dbname = "contatos";
    $user = "root";
    $pass = "";

    $pdo = new PDO("mysql:host={$host};dbname={$dbname}", "{$user}", "{$pass}");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    return $pdo;
}

// RETORNA TODOS OS CONTATOS

function fetchAll() {
    $pdo = connection();
    $sql = "SELECT * FROM contatos";
    $list = $pdo->query($sql);
    $list->execute();
    return $list->fetchAll();
}