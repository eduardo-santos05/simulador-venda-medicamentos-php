<?php

require_once 'Medicamento.php';

class MedicamentoMarca extends Medicamento{
    private $marca;
    
    public function __construct($nome, $valor, $marca) {
        parent::__construct($nome, $valor);
        $this->marca = $marca;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($marca): void {
        $this->marca = $marca;
    }
    
    #[\Override]
    public function getDescricao() {
        return $this->getNome()
            . " (Marca: " . $this->getMarca() . ")"
            . " - R$ " . number_format($this->getValor(), 2, ',', '.')
            . " -> R$ " . number_format($this->getValorComDesconto(), 2, ',', '.');
    }

    #[\Override]
    public function getValorComDesconto() {
        return round($this->getValor() * 0.95, 2);
    }
}
