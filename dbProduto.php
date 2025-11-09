<?php


spl_autoload_register(function ($class) {
    require_once "Classes/{$class}.class.php";
});


$produto = new Produto();
if (filter_has_var(INPUT_POST, "btnCadastrar")):
    $produto->setNome(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING));
    $produto->setDescricao(filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING));
    $produto->setPreco(filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_STRING));
    $produto->setUnidade(filter_input(INPUT_POST, 'unidade', FILTER_SANITIZE_STRING));
    $idproduto = filter_input(INPUT_POST, 'id');
    if (empty($idproduto)):

        if ($produto->add()) {
            echo "<script>window.alert('Produto cadastrado!');window.location.href='produtos.php';</script>";
        } else {
            echo "<script>window.alert('Erro ao cadastrar o produto!'); window.open(document.referrer,'_self');</script>";
        }
    else:
        if ($produto->update('id', $idproduto)) {
            echo "<script>window.alert('Produto alterada com sucesso.');window.location.href='produtos.php';</script>";
        } else {
            echo "<script>window.alert('Erro ao alterar Produto.');window.open(document.referrer,'_self');</script>";
        }
    endif;
elseif (filter_has_var(INPUT_POST, "btnDeletar")):
    $idproduto = intval(filter_input(INPUT_POST, "idProduto"));
    if ($produto->delete("id", $idproduto)) {
        header("location:produtos.php");
    } else {
        echo "<script>window.alert('Erro ao Excluir'); window(document.referrer,'_self');</script>";
    }
endif;
