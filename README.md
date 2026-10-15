# Simulador de Venda de Medicamentos

Aplicação web desenvolvida em PHP que simula o cálculo de preços de medicamentos genéricos e de marca. O sistema aplica percentuais de desconto diferentes conforme o tipo de medicamento e apresenta os preços originais, os preços com desconto e os totais em uma tabela HTML estilizada com Bootstrap.

## Funcionalidades

- Criação de exemplos de medicamentos genéricos e de marca diretamente no código.
- Listagem de nome, tipo, marca e preço original.
- Cálculo do preço com desconto para cada medicamento.
- Aplicação de regras de desconto:
  - **Medicamentos genéricos:** 10% de desconto.
  - **Medicamentos de marca:** 5% de desconto.
- Cálculo dos totais antes e depois dos descontos.

## Tecnologias

- PHP 8.3 ou superior.
- HTML5.
- CSS incorporado na página.
- Bootstrap 5.3.2 via CDN.

## Estrutura do projeto

| Arquivo | Responsabilidade |
| --- | --- |
| `index.php` | Cria os exemplos de medicamentos e apresenta a tabela de resultados. |
| `Medicamento.php` | Classe abstrata com os dados comuns e os métodos que as subclasses devem implementar. |
| `MedicamentoGenerico.php` | Implementa o medicamento genérico e seu desconto de 10%. |
| `MedicamentoMarca.php` | Implementa o medicamento de marca, armazena a marca e aplica desconto de 5%. |
| `Farmacia.php` | Mantém a lista de medicamentos e calcula os totais. |

## Como executar

É necessário ter o PHP 8.3 ou superior instalado. O Bootstrap é carregado por CDN, portanto o navegador precisa de acesso à internet para aplicar os estilos.

1. Abra um terminal na pasta raiz do projeto.
2. Confira a versão do PHP:

   ```bash
   php -v
   ```

3. Inicie o servidor de desenvolvimento:

   ```bash
   php -S localhost:8000
   ```

4. Acesse [http://localhost:8000](http://localhost:8000) no navegador.

## Observações

- Os medicamentos e seus preços são definidos diretamente no código, sem persistência em banco de dados.
- O projeto tem finalidade didática, demonstrando conceitos de Programação Orientada a Objetos (POO) e regras de negócio.
