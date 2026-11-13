
<?php

class Animal {
    public string $nome;
    private int $idade;

    public function __construct(string $nome, int $idade) {
        $this->nome = $nome;
        $this->setIdade($idade);
    }

    public function getIdade(): int {
        return $this->idade;
    }

    public function setIdade(int $idade): void {
        if ($idade < 0) {
            echo "Idade inválida!\n";
            return;
        }

        $this->idade = $idade;
    }

    public function fazerBarulho(): void {
        echo "O animal faz um som.\n";
    }
}

class Cachorro extends Animal {
    public function fazerBarulho(): void {
        echo "Au au!\n";
    }
}

class Gato extends Animal {
    public function fazerBarulho(): void {
        echo "Miau!\n";
    }
}

class Passaro extends Animal {
    public function fazerBarulho(): void {
        echo "Piu piu!\n";
    }
}

$cachorro = new Cachorro("Rex", 5);
$gato = new Gato("Mimi", 3);
$passaro = new Passaro("Piu", 2);

$animais = [$cachorro, $gato, $passaro];

echo "===== ZOOLÓGICO =====\n";

foreach ($animais as $animal) {
    echo "\nNome: {$animal->nome}\n";
    echo "Idade: {$animal->getIdade()} anos\n";
    echo "Som: ";
    $animal->fazerBarulho();
}

?>
