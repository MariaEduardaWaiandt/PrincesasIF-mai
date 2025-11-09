<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ramour Cosméticos</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    /* Banner */
    .hero {
      background: url("images/imagem maquiagem.png") no-repeat center center/cover;
      height: 80vh;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-shadow: 2px 2px 6px rgba(136, 21, 21, 0.6);
    }

    /* Cards */
    .card img {
      height: 250px;
      object-fit: cover;
    }

    /* Categorias */
    .category-icon {
      font-size: 50px;
      color: #d63384;
      margin-bottom: 8px;
    }

    .hover-shadow:hover {
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
      transform: scale(1.03);
      transition: all 0.3s ease;
    }

    footer {
      background-color: #3d203c;
      color: white;
      text-align: center;
      padding: 20px;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">💄 Ramour Cosméticos</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="index.php">Início</a></li>
          <li class="nav-item"><a class="nav-link" href="#categorias">Produtos</a></li>
          <li class="nav-item"><a class="nav-link" href="#produtos">Ofertas</a></li>
          <li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
          <li class="nav-item"><a class="nav-link" href="localizacao.php" target="_blank">Localização</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Banner -->
  <section class="hero text-center">
    <div>
      <h1 class="display-3 fw-bold">Beleza Além dos Produtos</h1>
      <p class="lead">Transforme sua maquiagem em arte ✨</p>
      <a href="#produtos" class="btn btn-lg btn-light mt-3">Explorar Produtos</a>
    </div>
  </section>

  <!-- Categorias -->
  <section id="categorias" class="py-5 text-center container">
    <h2 class="fw-bold mb-4">Categorias</h2>
    <div class="row g-4">

      <div class="col-md-3">
        <a href="labios.php" target="_blank" class="text-decoration-none text-dark">
          <div class="p-3 border rounded hover-shadow">
            <div class="category-icon">👄</div>
            <h5>Lábios</h5>
          </div>
        </a>
      </div>

      <div class="col-md-3">
        <a href="olhos.php" target="_blank" class="text-decoration-none text-dark">
          <div class="p-3 border rounded hover-shadow">
            <div class="category-icon">👁️</div>
            <h5>Olhos</h5>
          </div>
        </a>
      </div>

      <div class="col-md-3">
        <a href="pele.php" target="_blank" class="text-decoration-none text-dark">
          <div class="p-3 border rounded hover-shadow">
            <div class="category-icon">🧴</div>
            <h5>Pele</h5>
          </div>
        </a>
      </div>

      <div class="col-md-3">
        <a href="perfumes.php" target="_blank" class="text-decoration-none text-dark">
          <div class="p-3 border rounded hover-shadow">
            <div class="category-icon">🌸</div>
            <h5>Perfumes</h5>
          </div>
        </a>
      </div>

    </div>
  </section>

  <!-- Produtos -->
  <section id="produtos" class="py-5 bg-light">
    <div class="container">
      <h2 class="fw-bold text-center mb-4">Produtos em Destaque</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card shadow-sm">
            <img src="images/batom vermelho.png.jpg" class="card-img-top" alt="Batom">
            <div class="card-body text-center">
              <h5 class="card-title">Batom Vermelho</h5>
              <p class="card-text">Longa duração e hidratação intensa.</p>
              <a href="cadasLogin.php" class="btn btn-dark">Comprar</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card shadow-sm">
            <img src="images/base_liquida.png" class="card-img-top" alt="Base">
            <div class="card-body text-center">
              <h5 class="card-title">Base Líquida</h5>
              <p class="card-text">Cobertura leve e acabamento natural.</p>
              <a href="cadasLogin.php" class="btn btn-dark">Comprar</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card shadow-sm">
            <img src="images/sombra.jpg" class="card-img-top" alt="Paleta de Sombras">
            <div class="card-body text-center">
              <h5 class="card-title">Paleta de Sombras</h5>
              <p class="card-text">Cores vibrantes para qualquer ocasião.</p>
              <a href="cadasLogin.php" class="btn btn-dark">Comprar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contato -->
  <section id="contato" class="py-5 text-center container">
    <h2 class="fw-bold mb-4">Contato</h2>
    <p class="lead">Fale com a gente diretamente pelo WhatsApp 📲</p>
    <a href="https://wa.me/5599999999999" target="_blank" class="btn btn-success btn-lg">
      Abrir WhatsApp
    </a>
  </section>

  <!-- Rodapé -->
  <footer class="text-center py-4">
    <?php require_once "_parts/_footer.php"; ?>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
