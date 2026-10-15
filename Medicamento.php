<?php

abstract class Medicamento {
    private $nome;
    private $valor;
    
    public function __construct($nome, $valor) {
        $this->nome = $nome;
        $this->valor = $valor;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setValor($valor): void {
        $this->valor = $valor;
    }
    
    public abstract function getValorComDesconto();
    
    public abstract function getDescricao();
}
