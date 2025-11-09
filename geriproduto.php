<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/baseAdmin.css">
    <title>Produtos</title>
</head>

<body>
    <header>
        <?php require_once("_parts/_menu.php"); ?>
    </header>
    <main class="container">
        <?php
        spl_autoload_register(function ($class) {
            require_once "classes/{$class}.class.php";
        });
        if (filter_has_var(INPUT_POST, "idProduto")) {
            $edtproduto = new produto();
            $idProduto = intval(filter_input(INPUT_POST, "idProduto"));
            $produto = $edtproduto->search("id", $idProduto); 
        }

        ?>
        <form method="post" action="dbProduto.php" class="row g-3 mt-3">
            <input type="hidden" value="<?php echo $produto->idProduto ?? null; ?>" name="idProduto">
            <div class="col-12">
                <label for="produto" class="form-label">Produto</label>
                <input type="text" name="produto" id="produto" placeholder="Digite o nome do produto" required
                    class="form-control" value="<?php echo $produto->nome ?? ''; ?>">
            </div>
            <div class="col-12">
                <button type="submit" name="btnGravar" class="btn btn-success">Gravar</button>
            </div>
        </form>
    </main>
    <footer>
        <?php require_once("_parts/_footer.php"); ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>