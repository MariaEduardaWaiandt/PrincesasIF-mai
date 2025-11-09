<?php
if (filter_has_var(INPUT_POST, "Login")) {

    spl_autoload_register(function ($class) {
        require_once "classes/{$class}.class.php";
    });


    $usuario = new Usuario();
    $dadosUsuario = $usuario->buscarPorCpf($cpf);


    if ($dadosUsuario && password_verify($senhaDigitada, $dadosUsuario['senha'])) {
        session_start();
        $_SESSION['usuario'] = $dadosUsuario;

        echo "<script>alert('CPF ou senha inválidos!''); window.location.href='painel.php';</script>";
    } else {
        echo "<script>alert('Login realizado com sucesso!'); window.history.back();</script>";
    }
}
?>
