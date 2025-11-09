<?php

spl_autoload_register(function ($class) {
    require_once "classes/{$class}.class.php";
});

$empresa = new Empresa();

if (filter_has_var(INPUT_POST, "Cadastrar")):
    $empresa->setCnpj(filter_input(INPUT_POST, "Cnpj", FILTER_SANITIZE_STRING));
    $empresa->setNome(filter_input(INPUT_POST, "Nome", FILTER_SANITIZE_STRING));
    $empresa->setEndereco(filter_input(INPUT_POST, "Endereco", FILTER_SANITIZE_STRING));
    $empresa->setEmail(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
    $empresa->setTelefones(filter_input(INPUT_POST, "Telefones", FILTER_SANITIZE_STRING));
    $empresa->setResponsaveis(filter_input(INPUT_POST, "responsaveis", FILTER_SANITIZE_STRING));
    $empresa->setAtiv_eco(filter_input(INPUT_POST, "ativ_eco", FILTER_SANITIZE_STRING));
    $empresa->setApresentacao(filter_input(INPUT_POST, "apresentacao", FILTER_SANITIZE_STRING));
    $empresa->setHistorico(filter_input(INPUT_POST, "historico", FILTER_SANITIZE_STRING));

    $idEmpresa = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);

    if (empty($idEmpresa)):
        if ($empresa->add()):
            echo "<script>alert('Empresa cadastrada com sucesso!'); window.location.href='empresa.php';</script>";
        else:
            echo "<script>alert('Erro ao cadastrar a empresa!'); window.history.back();</script>";
        endif;
    else:
        if ($empresa->update("id", $idEmpresa)):
            echo "<script>alert('Empresa atualizada com sucesso!'); window.location.href='empresa.php';</script>";
        else:
            echo "<script>alert('Erro ao atualizar a empresa!'); window.history.back();</script>";
        endif;
    endif;

elseif (filter_has_var(INPUT_POST, "btnDeletar")):
    $idEmpresa = intval(filter_input(INPUT_POST, "idEmpresa"));
    if ($empresa->delete("id", $idEmpresa)):
        echo "<script>alert('Empresa deletada com sucesso!'); window.location.href='empresa.php';</script>";
    else:
        echo "<script>alert('Erro ao deletar a empresa!'); window.history.back();</script>";
    endif;

endif;
