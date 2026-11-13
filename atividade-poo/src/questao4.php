
<?php

class Funcionario {
    private float $salario;

    public function __construct(float $salario) {
        $this->setSalario($salario);
    }

    public function getSalario(): float {
        return $this->salario;
    }

    public function setSalario(float $salario): void {
        if ($salario < 0) {
            echo "Erro: salário não pode ser negativo!\n";
            return;
        }

        $this->salario = $salario;
    }
}

$funcionario = new Funcionario(2500);

echo "Salário inicial: R$ " .
    number_format($funcionario->getSalario(), 2, ',', '.') . "\n";

$funcionario->setSalario(3000);

echo "Novo salário: R$ " .
    number_format($funcionario->getSalario(), 2, ',', '.') . "\n";

$funcionario->setSalario(-500);

echo "Salário atual: R$ " .
    number_format($funcionario->getSalario(), 2, ',', '.') . "\n";

?>
