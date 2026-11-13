
<?php

class Usuario {
    public string $nome;
    private string $senha;

    public function __construct(string $nome, string $senha) {
        $this->nome = $nome;
        $this->setSenha($senha);
    }

    public function setSenha(string $senha): void {
        if (strlen($senha) < 6) {
            echo "Erro: a senha deve ter pelo menos 6 caracteres!\n";
            return;
        }

        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
    }

    public function verificarSenha(string $senha): bool {
        return password_verify($senha, $this->senha);
    }

    public function listarPermissoes(): array {
        return ["Acesso básico"];
    }
}

class Admin extends Usuario {
    public function listarPermissoes(): array {
        return [
            "Acesso básico",
            "Cadastrar usuários",
            "Excluir usuários",
            "Editar configurações"
        ];
    }
}

class Cliente extends Usuario {
    public function listarPermissoes(): array {
        return [
            "Acesso básico",
            "Visualizar produtos",
            "Realizar compras"
        ];
    }
}

$admin = new Admin("Administrador", "admin123");
$cliente = new Cliente("João", "cliente123");

echo "===== SISTEMA DE USUÁRIOS =====\n";

echo "\nUsuário: {$admin->nome}\n";
echo "Permissões:\n";

foreach ($admin->listarPermissoes() as $permissao) {
    echo "- {$permissao}\n";
}

echo "\nUsuário: {$cliente->nome}\n";
echo "Permissões:\n";

foreach ($cliente->listarPermissoes() as $permissao) {
    echo "- {$permissao}\n";
}

echo "\nVerificação de senha do administrador: ";

echo $admin->verificarSenha("admin123")
    ? "Senha correta!\n"
    : "Senha incorreta!\n";

echo "Verificação de senha do cliente: ";

echo $cliente->verificarSenha("senhaerrada")
    ? "Senha correta!\n"
    : "Senha incorreta!\n";

?>
