<?php

$host = "localhost";
$dbname = "cliente_encantart";
$user = "albeny";
$pass = "160919";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    // Ativar modo de erros
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    //erro na conexao
    $error = $e->getMessage();
    echo "Erro: $error";
}