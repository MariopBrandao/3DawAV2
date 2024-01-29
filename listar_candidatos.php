function listarCandidatos() {
    $pdo = conectar();
    $sql = "SELECT * FROM candidatos ORDER BY nome";
    $stmt = $pdo->query($sql);
    $candidatos = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Gerar tabela
    echo "<h1>Lista de Candidatos</h1>";
    echo "<table border='1'>";
    echo "<tr><th>Nome</th><th>CPF</th><th>Identidade</th><th>Email</th><th>Cargo</th><th>Sala</th></tr>";
    foreach ($candidatos as $candidato) {
        echo "<tr><td>{$candidato['nome']}</td><td>{$candidato['cpf']}</td><td>{$candidato['identidade']}</td><td>{$candidato['email']}</td><td>{$candidato['cargo']}</td><td>{$candidato['sala']}</td></tr>";
    }
    echo "</table>";
}
