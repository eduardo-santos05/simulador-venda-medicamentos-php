<?php

class Farmacia {
    private array $medicamentos = [];
    
    public function adicionarMedicamentos(Medicamento $m) : void {
        $this->medicamentos[] = $m;
    }
    
    public function calcularTotalSemDesconto() {
        $total = 0;
        foreach($this->medicamentos as $m) {
            $total += $m->getValor();
        }
        return round($total, 2);
    }
    
    public function calcularTotalComDesconto() {
        $total = 0;
        foreach ($this->medicamentos as $m) {
            $total += $m->getValorComDesconto();
        }
        return round($total, 2);
    }
    
    public function listarMedicamentos() : array {
        return $this->medicamentos;
    }
}
