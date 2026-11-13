
<?php

class Pessoa {
    public string $nome;
    public int $idade;

    public function __construct(string $nome, int $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function apresentar(): void {
        echo "Nome: {$this->nome}\n";
        echo "Idade: {$this->idade}\n";
    }
}

class Aluno extends Pessoa {
    public string $matricula;

    public function __construct(
        string $nome,
        int $idade,
        string $matricula
    ) {
        parent::__construct($nome, $idade);
        $this->matricula = $matricula;
    }

    public function exibirCadastro(): void {
        $this->apresentar();
        echo "Matrícula: {$this->matricula}\n";
    }
}

$aluno = new Aluno("João", 20, "2026001");

echo "===== CADASTRO DO ALUNO =====\n";
$aluno->exibirCadastro();

?>
