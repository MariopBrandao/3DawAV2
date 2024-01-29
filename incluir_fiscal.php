function incluirFiscal() {
    $pdo = conectar();
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $sala = $_POST['sala'];

    // Validações
    if (
