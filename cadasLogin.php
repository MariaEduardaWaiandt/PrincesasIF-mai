<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="CSS/base.css" />

</head>

<body id="login" class="bg-light">
 
  <header class="text-center py-4">
    <?php require_once "_parts/_menu.php"; ?>
  </header>

 
  <section class="d-flex align-items-center justify-content-center vh-100">
    <div class="card shadow p-4" style="max-width: 400px; width: 100%;">
      <h2 class="text-center mb-4">Tela de Login</h2>

      <form action="dbLogin.php" method="POST">
        <div class="mb-3">
          <label for="inputusuario" class="form-label">CPF</label>
          <input type="text" id="inputusuario" name="cpf" class="form-control" placeholder="Digite seu CPF" required />
        </div>

        <div class="mb-3">
          <label for="inputsenha" class="form-label">Senha</label>
          <input type="password" id="inputsenha" name="senha" class="form-control" placeholder="Digite sua senha" required />
        </div>

        <button type="submit" name="Login" class="btn btn-primary w-100">Efetuar Login</button>
      </form>

      <div class="mt-3 text-center">
        <a href="cadasusuario.php">Não tem conta? Cadastre-se</a>
      </div>
    </div>
  </section>

  <!-- Rodapé -->
  <footer class="text-center py-4">
    <?php require_once "_parts/_footer.php"; ?>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
