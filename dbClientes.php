<?php

        spl_autoload_register(function ($class) {
        require_once "classes/{$class}.class.php";
    });

   
    $CadastroClientes = new Cliente;
    $CadastroClientes->setId(filter_input(INPUT_POST, 'id' ));
    $CadastroClientes->setNome(filter_input(INPUT_POST, 'nome'));
    $CadastroClientes->setEmail(filter_input(INPUT_POST, 'email'));
    $CadastroClientes->setCpf(filter_input(INPUT_POST, 'cpf' ));
    $CadastroClientes->setCep(filter_input(INPUT_POST, 'cep'));

    if (isset($_POST['btnGravar'])):
      $CadastroClientes->setNome(filter_input(INPUT_POST, 'nome'));
      $idCliente = intval(filter_input(INPUT_POST, "id"));
      if (empty($idCliente)):
         if ($CadastroClientes->add()) { 
    
        echo "<script>window.alert('Cliente cadastrado com sucesso.'); window.location.href='Clientes.php';</script>";
        } else {
            echo "<script>window.alert('Erro ao adicionar Cliente.'); window.location.href='CadastroClientes.php';</script>";
        }
    else:
        if ($CadastroClientes->update('id', $idCliente)) {
            echo "<script>window.alert('Cliente alterado com sucesso.'); window.location.href='Clientes.php';</script>";
        } else {
            echo "<script>window.alert('Erro ao alterar Cliente.'); window.location.href='Clientes.php';</script>";
        }endif;
    elseif (filter_has_var(INPUT_POST,'btnDeletar')):
        $id = intval(filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT));
        if ($CadastroClientes->delete('id', $id)) {
            header("location:Clientes.php");
        } else {
            echo "<script>window.alert('Erro ao excluir Cliente.'); window.location.href='Clientes.php';</script>";
        }
    endif;