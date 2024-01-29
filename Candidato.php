<?php

class Candidato {

    private $id;
    private $nome;
    private $cpf;
    private $identidade;
    private $email;
    private $cargo;
    private $sala;

    public function __construct($id, $nome, $cpf, $identidade, $email, $cargo, $sala) {
        $this->id = $id;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->identidade = $identidade;
        $this->email = $email;
        $this->cargo = $cargo;
        $this->sala = $sala;
    }

    // Getters and setters

}

?>
