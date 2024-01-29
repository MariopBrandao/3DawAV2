<?php
// Incluir classes e funções
require_once 'conexao.php';
require_once 'classes/Candidato.php';
require_once 'classes/Fiscal.php';

// Sessão
session_start();

// Verificação de login
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit;
}

// Menu
$menu = array(
    'candidatos' => 'Listar Candidatos',
    'fiscais' => 'Incluir Fiscal de Prova',
    'salas' => 'Alterar Sala de Prova',
);

// Selecionar ação
if (isset($_GET['acao'])) {
    $acao = $_GET['acao'];
} else {
    $acao = 'inicio';
}

// Chamar função específica
switch ($acao) {
    case 'inicio':
        include 'inicio.php';
        break;
    case 'candidatos':
        listarCandidatos();
        break;
    case 'fiscais':
        incluirFiscal();
        break;
    case 'salas':
        alterarSala();
        break;
    default:
        echo "<h1>Ação inválida!</h1>";
}

?>
