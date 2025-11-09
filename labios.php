<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ramour Cosméticos - Lábios</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .card img {
      height: 250px;
      object-fit: cover;
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
      <a class="navbar-brand fw-bold" href="index.php">💄 Ramour Cosméticos</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="index.php">Início</a></li>
          <li class="nav-item"><a class="nav-link active" href="labios.php">Lábios</a></li>
          <li class="nav-item"><a class="nav-link" href="olhos.php">Olhos</a></li>
          <li class="nav-item"><a class="nav-link" href="pele.php">Pele</a></li>
          <li class="nav-item"><a class="nav-link" href="perfumes.php">Perfumes</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Título -->
  <section class="py-5 text-center bg-light">
    <div class="container">
      <h1 class="fw-bold">Categoria: Lábios 💋</h1>
      <p class="lead">Encontre batons, gloss e cuidados para lábios irresistíveis.</p>
    </div>
  </section>

  <!-- Produtos -->
  <section class="py-5">
    <div class="container">
      <div class="row g-4">

        <!-- Produto 1 -->
        <div class="col-md-4">
          <div class="card shadow-sm">
            <img src="images/batom.jpg" class="card-img-top" alt="Batom Vermelho">
            <div class="card-body text-center">
              <h5 class="card-title">Batom Vermelho Matte</h5>
              <p class="card-text">Cor intensa e de longa duração.</p>
              <a href="cadasLogin.php" class="btn btn-dark">Comprar</a>
            </div>
          </div>
        </div>

        <!-- Produto 2 -->
        <div class="col-md-4">
          <div class="card shadow-sm">
            <img src="images/gloss.jpg" class="card-img-top" alt="Gloss Brilhante">
            <div class="card-body text-center">
              <h5 class="card-title">Gloss Brilhante</h5>
              <p class="card-text">Efeito espelhado com hidratação.</p>
              <a href="cadasLogin.php" class="btn btn-dark">Comprar</a>
            </div>
          </div>
        </div>

        <!-- Produto 3 -->
        <div class="col-md-4">
          <div class="card shadow-sm">
            <img src="images/lipbalm.jpg" class="card-img-top" alt="Lip Balm">
            <div class="card-body text-center">
              <h5 class="card-title">Lip Balm Hidratante</h5>
              <p class="card-text">Proteção e maciez o dia inteiro.</p>
              <a href="cadasLogin.php" class="btn btn-dark">Comprar</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Rodapé -->
  <footer class="text-center py-4">
    <?php require_once "_parts/_footer.php"; ?>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
