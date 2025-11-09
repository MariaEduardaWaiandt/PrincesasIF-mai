<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cadastrar Usuário</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="CSS/base.css" />
</head>
<header>
        <?php require_once "_parts/_menu.php"; ?>
    </header>
<body>

    <main class="container">
        <form class="row g-3" method="POST" action="dbUsuario.php">
    <div class="form-container">
        <h2 class="text-center mb-4">Cadastro de Usuário</h2>
        <form class="row g-3" method="POST" action="dbUsuario.php">
            <div class="col-md-6">
                <label for="inputNome" class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" id="inputNome" required>
            </div>
            <div class="col-md-6">
                <label for="inputEmail" class="form-label">E-mail</label>
                <input type="email" name="email" class="form-control" id="inputEmail" required>
            </div>
            <div class="col-md-6">
                <label for="inputTelefone" class="form-label">Telefones</label>
                <input type="text" name="telefones" class="form-control" id="inputTelefone" required>
            </div>
            <div class="col-md-6">
                <label for="inputEndereco" class="form-label">Endereço</label>
                <input type="text" name="endereco" class="form-control" id="inputEndereco" required>
            </div>
            <div class="col-md-6">
                <label for="inputSenha" class="form-label">Senha</label>
                <input type="password" name="senha" class="form-control" id="inputSenha" required>
            </div>
            <div class="col-12 text-center mt-3">
                <button name= "btnGravar"type="submit" class="btn btn-primary w-50">Cadastrar</button>
            </div>
            </form>
    </main>
  
  <!-- Rodapé -->
  <footer class="text-center py-4">
    <?php require_once "_parts/_footer.php"; ?>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
