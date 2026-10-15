<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistema de venda de medicamentos</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body {
                background-color: #f8f9fa;
            }
            .titulo-simulador {
                margin-top: 50px;
            }
            .card {
                margin-top: 50px;
            }
            .badge-gen {
                background-color: #6c757d;
            }
            .badge-marca {
                background-color: #0d6efd;
            }
            .table tfoot tr {
                font-weight: bold;
                background-color: #e9ecef;
            }
        </style>
    </head>
    <body>
        <?php
            require_once 'MedicamentoGenerico.php';
            require_once 'MedicamentoMarca.php';
            require_once 'Farmacia.php';

            $paracetamol = new MedicamentoGenerico("Paracetamol", 10.00);
            $ibuprofeno = new MedicamentoGenerico("Ibuprofeno", 15.00);
            $dipirona = new MedicamentoGenerico("Dipirona", 8.00);
            $amoxicilina = new MedicamentoGenerico("Amoxicilina", 22.50);
            $loratadina = new MedicamentoGenerico("Loratadina", 9.00);

            $aspirina = new MedicamentoMarca("Aspirina", 20.00, "Bayer");
            $allegra = new MedicamentoMarca("Allegra", 35.00, "Sanofi");
            $buscopan = new MedicamentoMarca("Buscopan", 18.50, "Boehringer");

            $farmacia = new Farmacia();
            $farmacia->adicionarMedicamentos($paracetamol);
            $farmacia->adicionarMedicamentos($ibuprofeno);
            $farmacia->adicionarMedicamentos($dipirona);
            $farmacia->adicionarMedicamentos($amoxicilina);
            $farmacia->adicionarMedicamentos($loratadina);
            $farmacia->adicionarMedicamentos($aspirina);
            $farmacia->adicionarMedicamentos($allegra);
            $farmacia->adicionarMedicamentos($buscopan);
        ?>
        <div class="container">
            <h1 class="titulo-simulador text-primary fw-bold text-center">Simulador de Venda de Medicamentos</h1>
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Resumo da Venda</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>Nome do Medicamento</th>
                                <th>Tipo</th>
                                <th>Marca</th>
                                <th>Preço Original (R$)</th>
                                <th>Preço com Desconto (R$)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($farmacia->listarMedicamentos() as $medicamento): ?>
                                <tr>
                                    <td><?= htmlspecialchars($medicamento->getNome()) ?></td>
                                    <td>
                                        <?php if ($medicamento instanceof MedicamentoMarca): ?>
                                            <span class="badge badge-marca">Marca</span>
                                        <?php else: ?>
                                            <span class="badge badge-gen">Genérico</span>
                                        <?php endif; ?>
                                    </td>
                                    <td><?= $medicamento instanceof MedicamentoMarca ? htmlspecialchars($medicamento->getMarca()) : '-' ?></td>
                                    <td><?= number_format($medicamento->getValor(), 2, ',', '.') ?></td>
                                    <td><?= number_format($medicamento->getValorComDesconto(), 2, ',', '.') ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3">Totais</td>
                                <td><?= number_format($farmacia->calcularTotalSemDesconto(), 2, ',', '.') ?></td>
                                <td><?= number_format($farmacia->calcularTotalComDesconto(), 2, ',', '.') ?></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>