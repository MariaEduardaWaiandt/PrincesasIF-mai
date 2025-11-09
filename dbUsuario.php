<?php
spl_autoload_register(function ($class) {
    require_once "classes/{$class}.class.php";
});

    spl_autoload_register(function ($class) {
        require_once "classes/{$class}.class.php";
    });
    
    $usuario = new Usuario();
    
    if (filter_has_var(INPUT_POST, "btnGravar")):
    $usuario->setNome(filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING));
    $usuario->setEndereco(filter_input(INPUT_POST, "endereco", FILTER_SANITIZE_STRING));
    $usuario->setEmail(filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING));
    $usuario->setTelefone(filter_input(INPUT_POST, "telefone", FILTER_SANITIZE_STRING));
    $usuario->setSenha(filter_input(INPUT_POST, "senha", FILTER_SANITIZE_STRING));
    $usuario->setCPF(filter_input(INPUT_POST, "CPF", FILTER_SANITIZE_STRING));

    if (empty($idUsuario)):
        if ($usuario->add()):
            echo "<script>alert('Empresa cadastrada com sucesso!'); window.location.href='Usuario.php';</script>";
        else:
            echo "<script>alert('Erro ao cadastrar a empresa!'); window.history.back();</script>";
        endif;
    else:
        if ($usuario->update("id", $idUsuario)):
            echo "<script>alert('Empresa atualizada com sucesso!'); window.location.href='Usuario.php';</script>";
        else:
            echo "<script>alert('Erro ao atualizar a empresa!'); window.history.back();</script>";
        endif;
    endif;

elseif (filter_has_var(INPUT_POST, "btnDeletar")):
    $idUsuario = intval(filter_input(INPUT_POST, "idUsuario"));
    if ($usuario->delete("id", $idUsuario)):
        echo "<script>alert('Empresa deletada com sucesso!'); window.location.href='Usuario.php';</script>";
    else:
        echo "<script>alert('Erro ao deletar a empresa!'); window.history.back();</script>";
    endif;

endif;

    $idUsuario = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);

    $idUsuario = filter_input(INPUT_POST, 'idUsuario');

    if (empty($idUsuario)):
        if ($usuario->add()) {
            echo "<script>window.alert('Usuário adicionado com sucesso.');window.location.href='Usuario.php';</script>";
        } else {
            echo "<script>window.alert('Erro ao adicionar o usuário.');window.open(document.referrer, '_self');</script>";
        }
    else:
        if ($usuario->update('id_usuario', $idUsuario)) {
            echo "<script>window.alert('Usuário alterado com sucesso.');window.location.href='Usuario.php';</script>";
        } else {
            echo "<script>window.alert('Erro ao alterar o usuário.');window.open(document.referrer, '_self');</script>";
        }
    endif;
