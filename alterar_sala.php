function alterarSala() {
    $pdo = conectar();
    $id = $_POST['id'];
    $sala = $_POST['sala'];

    // Validações
    if (empty($id) || empty($sala)) {
        echo "<p>Erro: Todos os campos são obrigatórios!</p>";
        return;
    }

    // Atualizar no banco de dados
    $sql = "UPDATE candidatos SET sala = :sala WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->bindValue(':sala', $sala);
    $stmt->execute();

    echo "<p>Sala do candidato alterada com sucesso!</p>";
}
