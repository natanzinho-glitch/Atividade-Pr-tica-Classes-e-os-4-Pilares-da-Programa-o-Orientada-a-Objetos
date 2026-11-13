
<?php

class Funcionario {
    public string $nome;
    public float $salario;

    public function __construct(string $nome, float $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function calcularBonus(): float {
        return 0;
    }
}

class Vendedor extends Funcionario {
    public function calcularBonus(): float {
        return $this->salario * 0.10;
    }
}

class Gerente extends Funcionario {
    public function calcularBonus(): float {
        return $this->salario * 0.20;
    }
}

$vendedor = new Vendedor("Carlos", 3000);
$gerente = new Gerente("Mariana", 6000);

echo "===== BÔNUS DOS FUNCIONÁRIOS =====\n";

echo "Vendedor: " . $vendedor->nome . "\n";
echo "Bônus: R$ " .
    number_format($vendedor->calcularBonus(), 2, ',', '.') . "\n";

echo "\nGerente: " . $gerente->nome . "\n";
echo "Bônus: R$ " .
    number_format($gerente->calcularBonus(), 2, ',', '.') . "\n";

?>
