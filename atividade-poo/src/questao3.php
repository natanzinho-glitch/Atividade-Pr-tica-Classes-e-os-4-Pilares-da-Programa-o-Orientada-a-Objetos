
<?php

class ContaBancaria {
    private float $saldo;

    public function __construct(float $saldoInicial = 0) {
        $this->saldo = max(0, $saldoInicial);
    }

    public function depositar(float $valor): void {
        if ($valor <= 0) {
            echo "Valor de depósito inválido!\n";
            return;
        }

        $this->saldo += $valor;
        echo "Depósito realizado com sucesso!\n";
    }

    public function sacar(float $valor): void {
        if ($valor <= 0) {
            echo "Valor de saque inválido!\n";
        } elseif ($valor > $this->saldo) {
            echo "Saldo insuficiente!\n";
        } else {
            $this->saldo -= $valor;
            echo "Saque realizado com sucesso!\n";
        }
    }

    public function consultarSaldo(): float {
        return $this->saldo;
    }
}

$conta = new ContaBancaria(1000);

$conta->depositar(500);
$conta->sacar(200);
$conta->sacar(2000);

echo "Saldo atual: R$ " .
    number_format($conta->consultarSaldo(), 2, ',', '.') . "\n";

?>
