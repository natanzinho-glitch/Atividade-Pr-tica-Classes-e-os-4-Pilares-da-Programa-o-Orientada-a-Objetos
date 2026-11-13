
<?php

class Forma {
    public function calcularArea(): float {
        return 0;
    }
}

class Retangulo extends Forma {
    public float $largura;
    public float $altura;

    public function __construct(float $largura, float $altura) {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function calcularArea(): float {
        return $this->largura * $this->altura;
    }
}

class Circulo extends Forma {
    public float $raio;

    public function __construct(float $raio) {
        $this->raio = $raio;
    }

    public function calcularArea(): float {
        return pi() * ($this->raio ** 2);
    }
}

$retangulo = new Retangulo(10, 5);
$circulo = new Circulo(3);

echo "Área do retângulo: " .
    number_format($retangulo->calcularArea(), 2, ',', '.') . "\n";

echo "Área do círculo: " .
    number_format($circulo->calcularArea(), 2, ',', '.') . "\n";

?>
