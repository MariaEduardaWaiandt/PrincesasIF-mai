<?php

header('Content-Type: text/html; charset=UTF-8');

// Define a senha que você quer aceitar para cadastro
$senha_correta = "1234"; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $senha = $_POST['senha'];

    if ($senha === $senha_correta) {
        // Senha correta: gera o hash e "cadastra"
        $senha_cripto = password_hash($senha, PASSWORD_DEFAULT);
        echo "Senha cadastrada com sucesso!<br>";
       
        echo "Senha incorreta. Cadastro negado.";
    }
} else {
    // Formulário para testar
    echo '
        <form method="post">
            <label>Digite sua senha:</label><br>
            <input type="password" name="senha" required><br><br>
            <input type="submit" value="Cadastrar senha">
        </form>
    ';
    
}
