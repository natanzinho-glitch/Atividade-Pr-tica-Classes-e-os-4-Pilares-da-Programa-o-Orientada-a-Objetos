
<?php

class Veiculo {
    public string $marca;
    public string $modelo;

    public function __construct(string $marca, string $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function exibirDados(): void {
        echo "Marca: {$this->marca}\n";
        echo "Modelo: {$this->modelo}\n";
    }
}

class Carro extends Veiculo {
    public int $quantidadePortas;

    public function __construct(
        string $marca,
        string $modelo,
        int $quantidadePortas
    ) {
        parent::__construct($marca, $modelo);
        $this->quantidadePortas = $quantidadePortas;
    }

    public function exibirCarro(): void {
        $this->exibirDados();
        echo "Portas: {$this->quantidadePortas}\n";
    }
}

class Moto extends Veiculo {
    public int $cilindradas;

    public function __construct(
        string $marca,
        string $modelo,
        int $cilindradas
    ) {
        parent::__construct($marca, $modelo);
        $this->cilindradas = $cilindradas;
    }

    public function exibirMoto(): void {
        $this->exibirDados();
        echo "Cilindradas: {$this->cilindradas} cc\n";
    }
}

$carro = new Carro("Toyota", "Corolla", 4);
$moto = new Moto("Honda", "CB 500", 500);

echo "===== CARRO =====\n";
$carro->exibirCarro();

echo "\n===== MOTO =====\n";
$moto->exibirMoto();

?>
