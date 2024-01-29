<?php
// Incluir classes e funções
require_once 'conexao.php';

// Sessão
session_start();

// Verificação de login
if (isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit;
}

// Formulário de login
if (isset($_POST['login'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Validar login
    $sql = "SELECT * FROM usuarios WHERE usuario = :usuario AND senha = :senha";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':usuario', $usuario);
    $stmt->bindValue(':senha', $senha);
    $stmt->execute();

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario) {
        $_SESSION['usuario'] = $usuario;
        header('Location: index.php');
        exit;
    } else {
        echo "<p>Erro no login!</p>";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="login.php" method="post">
        <input type="text" name="usuario" placeholder="Usuário">
        <input type="password" name="senha" placeholder="Senha">
        <input type="submit" name="login" value="Entrar">
    </form>
</body>
</html>

