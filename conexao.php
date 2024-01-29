<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "3Daw";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$banco", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
}

function conectar() {
    global $pdo;
    return $pdo;
}

?>
