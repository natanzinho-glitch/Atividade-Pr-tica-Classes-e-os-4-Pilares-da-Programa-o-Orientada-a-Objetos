
<?php

class Produto {
    public string $nome;
    public float $preco;

    public function __construct(string $nome, float $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function aplicarDesconto(float $percentual): void {
        if ($percentual < 0 || $percentual > 100) {
            echo "Desconto inválido!\n";
            return;
        }

        $this->preco -= $this->preco * ($percentual / 100);
    }

    public function exibirProduto(): void {
        echo "Produto: {$this->nome}\n";
        echo "Preço: R$ " . number_format($this->preco, 2, ',', '.') . "\n";
    }
}

$produto = new Produto("Notebook", 3500.00);

echo "Antes do desconto:\n";
$produto->exibirProduto();

$produto->aplicarDesconto(10);

echo "\nDepois do desconto:\n";
$produto->exibirProduto();

?>
