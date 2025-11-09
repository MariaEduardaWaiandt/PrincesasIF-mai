    <?php
                spl_autoload_register(function ($class) {
                    require_once "classes/{$class}.class.php";
                });
                  $c = new cliente();
                $clientes = $c->all();

                $Cliente = null;
                if (filter_has_var(INPUT_POST,"btnEditar")){

                }
                ?>

<!DOCTYPE html>
<html lang="pt-BR">    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/baseAdmin.css">
    <title>Clientes</title>
</head>

<body>
    <header>
        <?php require_once "_parts/_menu.php"; ?>
    </header>

    <main class="container mt-3">
        <div class="mt-3">
            <h3>Clientes</h3>
        </div>

        <div class="mt-3">
            <a href="CadastroClientes.php" class="btn btn-success"></a>
        </div>

        <table class="table">
            <thead class="table-secondary">
                <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                    <th>Email</th>
                    <th>Cpf</th>
                    <th>Cep</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $cliente):
                    ?>
                    
                    <tr>
                        <td><?php echo htmlspecialchars ($cliente->id); ?></td>
                        <td><?php echo htmlspecialchars ($cliente->nome); ?></td>
                        <td><?php echo htmlspecialchars ($cliente->email); ?></td>
                        <td><?php echo htmlspecialchars ($cliente->cpf); ?></td>
                        <td><?php echo htmlspecialchars ($cliente->cep); ?></td>
                        <td class="d-flex justify-content-center gap-1">

                            <form action="CadastroClientes.php" method="post" class="d-flex">
                                <input type="hidden" name= "id" value="<?php echo htmlspecialchars ($cliente->id);?>">
                                <button name="btnEditar" class="btn btn-primary btn-sm" type="submit"
                                    onclick="return confirm('Deseja editar o cliente?');">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                            </form>

                            <form action="dbClientes.php" method="post" class="d-flex">
                                <input type="hidden" name="id" value="<?php echo $cliente->id ?>">
                                <button name="btnDeletar" class="btn btn-danger btn-sm" type="submit"
                                    onclick="return confirm('Deseja deletar o cliente?');">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>

    <footer>
        <?php require_once "_parts/_footer.php"; ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
</body>

</html>