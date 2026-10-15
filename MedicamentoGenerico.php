<?php

require_once 'Medicamento.php';

class MedicamentoGenerico extends Medicamento{
    
    public function __construct($nome, $valor) {
        parent::__construct($nome, $valor);
    }

    #[\Override]
    public function getDescricao() {
        return $this->getNome()
        . " - R$ " . number_format($this->getValor(), 2, ',', '.')
        . " -> R$ " . number_format($this->getValorComDesconto(), 2, ',', '.');
    }

    #[\Override]
    public function getValorComDesconto() {
        return round($this->getValor() * 0.90, 2);
    }
}
