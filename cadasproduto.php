<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/base.css">
    <title>Cadastro de Produto</title>
</head>


<body>
    <header>
        <?php require_once "_parts/_menu.php"; ?>
    </header>

    <main class="container">

        <?php
        spl_autoload_register(function ($class) {
            require_once "Classes/{$class}.class.php";
        });

        if (filter_has_var(INPUT_POST, "btnEditar")) {
            $edtProduto = new produto;
            $id = intval(filter_input(INPUT_POST, "id"));
            $Produtos = $edtProduto->search("id", $id);
        }
        ?>

        <h2 class="text-center">Cadastro de Produto</h2>

        <a href="produtos.php" class="btn btn-outline-dark mt-2">Ver produtos cadastrados</a>

        <form action="dbProduto.php" method="post" class="row mt-3">

            <input type="hidden" value="<?php echo $Produtos->id ?? null; ?>" name="id">

            <!-- nome varchar(200) -->
            <div class="col-md-5">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" id="nome" placeholder="Digite o Nome do Produto" required
                    class="form-control" value="<?php echo $Produtos->nome ?? null; ?>">
            </div>

            <!-- preco decimal(1000, 2) -->
            <div class="col-md-3">
                <label for="preco" class="form-label">Preço</label>
                <input type="text" name="preco" id="preco" placeholder="Digite o Preço do Produto" required
                    class="form-control" value="<?php echo $Produtos->preco ?? null; ?>">
            </div>

            <!-- uniMed varchar(10) -->
            <div class="col-md-4">
                <label for="uniMed" class="form-label">Unidade de Medida</label>
                <input type="text" name="unidade" id="unidade" placeholder="Digite a Unidade de Medida do Produto"
                    required class="form-control" value="<?php echo $Produtos->unidade ?? null; ?>">
            </div>

            <!-- descricao varchar(500) -->
            <div class="col-md-12">
                <label for="descricao" class="form-label">Descrição</label>
                <textarea class="form-control" name="descricao" id="descricao"
                    placeholder="Apresente uma breve descrição do produto" rows="3"
                    required><?php echo $Produtos->descricao ?? null; ?></textarea>
            </div>

            <div class="col-12 mt-2">
                <button type="submit" name="btnCadastrar" id="btnCadastrar"
                    class="btn btn-outline-dark ms-2">Cadastrar</button>
            </div>
        </form>
    </main>

    <footer>
        <?php require_once "_parts/_footer.php"; ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>