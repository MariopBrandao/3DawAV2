<?php

class Fiscal {

    private $id;
    private $nome;
    private $cpf;
    private $sala;

    public function __construct($id, $nome, $cpf, $sala) {
        $this->id = $id;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->sala = $sala;
    }

    // Getters and setters

}

?>
