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
        <?php require_once "_parts/_menu.php"; ?>
    </header>

    <main class="container mt-3">
        <div class="mt-3">
            <h3>Produtos</h3>
        </div>

        <div class="mt-3">
            <a href="cadasproduto.php" class="btn btn-success">Novo Produto</a>
        </div>

        <table class="table mt-3">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Produtos</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                spl_autoload_register(function ($class) {
                    require_once "classes/{$class}.class.php";
                });

                $produtoObj = new Produto();
                $produtos = $produtoObj->all();

                foreach ($produtos as $produto):
                    ?>
                    <tr>
                        <td><?php echo htmlspecialchars($produto->id); ?></td>
                        <td><?php echo htmlspecialchars($produto->nome); ?></td>
                        <td>R$ <?php echo number_format($produto->preco, 2, ',', '.'); ?></td>
                        <td class="d-flex gap-1 justify-content-center">
                            <form action="produtos.php" method="post" class="d-flex">
                                <input type="hidden" name="id" value="<?php echo htmlspecialchars($produto->id); ?>">
                                <button name="btnEditar" class="btn btn-primary btn-sm" type="submit"
                                    onclick="return confirm('Tem certeza que deseja editar o produto?');">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                            </form>

                            <form action="dbProduto.php" method="post" class="d-flex">
                                <input type="hidden" name="idProduto" value="<?php echo htmlspecialchars($produto->id); ?>">
                                <button name="btnDeletar" class="btn btn-danger btn-sm" type="submit"
                                    onclick="return confirm('Tem certeza que deseja deletar o produto?');">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <?php
        // Se for edição
        if (filter_has_var(INPUT_POST, "btnEditar")) {
            $produtoObj = new Produto();
            $id = intval(filter_input(INPUT_POST, "id"));
            $produto = $produtoObj->search("id", $id);
        ?>
            <hr class="my-4">
            <h2 class="text-center">Editar Produto</h2>

            <form action="dbProduto.php" method="post" class="row mt-3">
                <input type="hidden" name="id" value="<?php echo $produto->id ?? null; ?>">

                <div class="col-md-5">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" name="nome" id="nome" required class="form-control"
                        value="<?php echo htmlspecialchars($produto->nome ?? ''); ?>" placeholder="Nome do produto">
                </div>

                <div class="col-md-3">
                    <label for="preco" class="form-label">Preço</label>
                    <input type="text" name="preco" id="preco" required class="form-control"
                        value="<?php echo htmlspecialchars($produto->preco ?? ''); ?>" placeholder="0,00">
                </div>

                <div class="col-md-4">
                    <label for="uniMed" class="form-label">Unidade de Medida</label>
                    <input type="text" name="uniMed" id="uniMed" required class="form-control"
                        value="<?php echo htmlspecialchars($produto->uniMed ?? ''); ?>" placeholder="Ex: kg, un">
                </div>

                <div class="col-md-12">
                    <label for="descricao" class="form-label">Descrição</label>
                    <textarea class="form-control" name="descricao" id="descricao" rows="3" required
                        placeholder="Descrição do produto"><?php echo htmlspecialchars($produto->descricao ?? ''); ?></textarea>
                </div>

                <div class="col-12 mt-3">
                    <button type="submit" name="btnCadastrar" class="btn btn-outline-dark">Atualizar Produto</button>
                </div>
            </form>
        <?php } ?>
    </main>

    <footer>
        <?php require_once "_parts/_footer.php"; ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</body>

</html>
