<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ramour Cosméticos - Beleza além dos produtos</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <link rel="stylesheet" href="CSS/baseSite.css">
  <link rel="stylesheet" href="CSS/index.css">

  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
</head>

<body>

  <!-- Header -->
  <header class="d-flex align-items-center p-3">
    <img src="images/logo.png" alt="Logo Ramour" class="me-3">
    <div class="empresa">
      <h1>Ramour Cosméticos</h1>
      <p>Beleza além dos produtos</p>
    </div>
  </header>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-light shadow-sm sticky-top">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <i class="bi bi-list"></i>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#sobre">Sobre</a></li>
          <li class="nav-item"><a class="nav-link" href="#produtos">Produtos</a></li>
          <li class="nav-item"><a class="nav-link" href="#estrutura">Estrutura</a></li>
          <li class="nav-item"><a class="nav-link" href="CadastroClientes.php">Cliente</a></li>
          <li class="nav-item"><a class="nav-link" href="cadasusuario.php">Usuário</a></li>
          <li class="nav-item"><a class="nav-link" href="cadasempresa.php">Empresa</a></li>
          <li class="nav-item"><a class="nav-link" href="cadasLogin.php">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero -->
  <section id="home" class="text-center py-5">
    <div class="container">
      <img src="images/maquiagem.png" alt="Promoção de produtos" class="img-fluid mb-3">
      <h2>Somente esta semana</h2>
      <p>Os melhores produtos por um preço irresistível!</p>
      <a href="#produtos" class="btn btn-custom btn-lg mt-3">Confira agora</a>
    </div>
  </section>

  <!-- Sobre -->
  <section id="sobre" class="py-5">
    <div class="container d-flex flex-wrap align-items-center">
      <div class="col-md-6 p-3">
        <img src="images/princesinhaMake.png" alt="Sobre Ramour" class="img-fluid rounded shadow">
      </div>
      <div class="col-md-6 p-3">
        <h2>Sobre Nós</h2>
        <p>Somos referência em cosméticos de qualidade, combinando inovação, tecnologia e cuidado com cada detalhe
          para valorizar a sua beleza natural.</p>
      </div>
    </div>
  </section>

  <!-- Produtos -->
  <section id="produtos" class="bg-light py-5">
    <div class="container">
      <h2 class="text-center mb-5">Nossos Produtos</h2>
      <div class="row g-4 justify-content-center">
        <div class="col-md-4">
          <div class="card card-product">
            <img src="images/makesIF.png" class="card-img-top" alt="Produto 1">
            <div class="card-body">
              <p class="card-text">
                Nossos cosméticos combinam ingredientes de alta qualidade, formulação personalizada, cuidados com a pele e a perfeita integração entre tecnologia e natureza.
              </p>
  </section>

  <!-- Estrutura -->
  <section id="estrutura" class="py-5">
    <div class="container d-flex flex-wrap align-items-center">
      <div class="col-md-6 p-3">
        <img src="images/logo.png" alt="Nossa Estrutura" class="img-fluid rounded shadow">
      </div>
      <div class="col-md-6 p-3">
        <h2>Nossa Estrutura</h2>
        <p>Ambientes modernos, atendimento exclusivo e excelência em cosméticos, proporcionando uma experiência
          única para nossos clientes.</p>
      </div>
    </div>
  </section>

  <!-- Rodapé -->
  <footer class="text-center py-4">
    <?php require_once "_parts/_footer.php"; ?>

  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
