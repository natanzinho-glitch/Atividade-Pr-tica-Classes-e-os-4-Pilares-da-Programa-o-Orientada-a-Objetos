
<?php

class Livro {
    public string $titulo;
    public string $autor;
    public int $ano;
    public string $editora;

    public function __construct(
        string $titulo,
        string $autor,
        int $ano,
        string $editora
    ) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ano = $ano;
        $this->editora = $editora;
    }

    public function exibirFicha(): void {
        echo "===== FICHA DO LIVRO =====\n";
        echo "Título: {$this->titulo}\n";
        echo "Autor: {$this->autor}\n";
        echo "Ano: {$this->ano}\n";
        echo "Editora: {$this->editora}\n";
    }
}

$livro = new Livro(
    "Dom Casmurro",
    "Machado de Assis",
    1899,
    "Garnier"
);

$livro->exibirFicha();

?>
