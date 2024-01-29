<?php
// Incluir classes e funções
require_once 'conexao.php';

// Conexão com o banco de dados
$pdo = conectar();

// Contar candidatos
$sql = "SELECT COUNT(*) AS total FROM candidatos";
$stmt = $pdo->query($sql);
$total_candidatos = $stmt->fetchColumn();

// Contar fiscais
$sql = "SELECT COUNT(*) AS total FROM fiscais";
$stmt = $pdo->query($sql);
$total_fiscais = $stmt->fetchColumn();

// Contar salas
$sql = "SELECT COUNT(*) AS total FROM salas";
$stmt = $pdo->query($sql);
$total_salas = $stmt->fetchColumn();

?>

<h1>Página Inicial</h1>

<p>Total de candidatos inscritos: <?php echo $total_candidatos; ?></p>
<p>Total de fiscais cadastrados: <?php echo $total_fiscais; ?></p>
<p>Total de salas disponíveis: <?php echo $total_salas; ?></p>
