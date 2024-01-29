-- Cria a tabela de candidatos
CREATE TABLE candidatos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    cpf VARCHAR(14) NOT NULL,
    identidade VARCHAR(15) NOT NULL,
    email VARCHAR(255) NOT NULL,
    cargo VARCHAR(100) NOT NULL,
    sala INT, -- **Verifique se o tipo de dado é compatível com a coluna `id` em `salas`**
    FOREIGN KEY (sala) REFERENCES salas (id) -- **Verifique se o nome da tabela e da coluna referenciadas estão corretos**
);

-- Cria a tabela de fiscais
CREATE TABLE fiscais (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    cpf VARCHAR(14) NOT NULL,
    sala INT,
    FOREIGN KEY (sala) REFERENCES salas (id)
);

-- Cria a tabela de salas
CREATE TABLE salas (
    id INT PRIMARY KEY AUTO_INCREMENT,
    numero INT NOT NULL,
    capacidade INT NOT NULL
);

-- Insere alguns dados de exemplo (opcional)
INSERT INTO candidatos (nome, cpf, identidade, email, cargo, sala) VALUES
    ('João Silva', '12345678900', 'MG-12345678', 'joaosilva@email.com', 'Desenvolvedor', 1),
    ('Maria Oliveira', '98765432100', 'SP-987654321', 'mariaoliveira@email.com', 'Analista de Dados', 2);

INSERT INTO fiscais (nome, cpf, sala) VALUES
    ('Pedro Souza', '00012345678', 1),
    ('Ana Costa', '99987654321', 2);

INSERT INTO salas (numero, capacidade) VALUES
    (1, 20),
    (2, 30);
