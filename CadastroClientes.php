<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="CSS/baseAdmin.css">
  <title>Gerenciamento de clientes</title>
</head>
 <header>
        <?php require_once "_parts/_menu.php"; ?>
    </header>
<body>
  <main class="container">
     <?php
        spl_autoload_register(function ($class) {
            require_once "classes/{$class}.class.php";
        });
        if (filter_has_var(INPUT_POST, "id")) {
            $edtCliente = new Clientes;
            $idCliente = intval(filter_input(INPUT_POST, "id"));
            $CadastroClientes = $edtCliente->search("id", $idCliente);
        }
        ?>
    <form action="dbClientes.php" method="post" class="row g3 mt-3">
      <input type="hidden" value="<?php echo $Cliente->id ?? null; ?>"name="id">
    <div class="form-container">

    
    </div>

      <div class="col-md-6">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="digite o nome do cliente" required class="form-control"
        value="<?php echo $CadastroClientes->nome ?? null;?>">
      </div>
      <div class="col-md-6">
        <label for="email" class="form-label">Email</label>
        <input type="text" name="email" id="email" placeholder="digite o email do cliente" required
          class="form-control"
          value="<?php echo $CadastroClientes->email?? null;?>">
      </div>
      <div class="col-12">
        <label for="cpf" class="form-label">CPF</label>
        <input type="text" name="cpf" id="cpf" placeholder="digite o cpf do cliente" required class="form-control"
        value="<?php echo $CadastroClientes->cpf ?? null;?>">
      </div>
      </div>
      <div class="col-md-2">
        <label for="cep" class="form-label">CEP</label>
        <input type="text" name="cep" id="cep" placeholder="digite o cep do cliente" required class="form-control"
        value="<?php echo $CadastroClientes->cep ?? null;?>">
      </div>
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Confirmar cadastro
          </label>
        </div>
      </div>
      <div class="col-12">
        <button type="submit" name="btnGravar" class="btn btn-outline-primary">Gravar</button>
      </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>
<footer>
        <?php require_once "_parts/_footer.php"; ?>
    </footer>
</html>
