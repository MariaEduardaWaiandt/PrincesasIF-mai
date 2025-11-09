<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/baseAdmin.css">
    <title>Gerenciar Cadastro de Usuários</title>
</head>

<body>
    <header>
        <?php require_once "_parts/_menu.php"; ?>
    </header>

    <main class="container">
        <?php
        spl_autoload_register(function ($class) {
            require_once "classes/{$class}.class.php";
        });

        $usuario = null;
        if (filter_has_var(INPUT_POST, "idUsuario")) {
            $usr = new Usuario;
            $idUsuario = intval($_POST["idUsuario"]);
            $usuario = $usr->search("id", $idUsuario);
        }
        ?>

        <form method="post" action="gerusuario.php?action=<?php echo isset($usuario) ? 'update' : 'add'; ?>" class="row g-3 mt-3">
            <?php if (isset($usuario)) : ?>
                <input type="hidden" name="id" value="<?php echo $usuario->id ?? ''; ?>">
            <?php endif; ?>

            <div class="col-12">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" id="nome" placeholder="Digite o nome do usuário" required
                    class="form-control" value="<?php echo $usuario->nome ?? ''; ?>">
            </div>

            <div class="col-12">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" name="email" id="email" placeholder="Digite o e-mail do usuário" required
                    class="form-control" value="<?php echo $usuario->email ?? ''; ?>">
            </div>

            <div class="col-12">
                <button type="submit" name="btnGravar" class="btn btn-success">
                    <?php echo isset($usuario) ? 'Atualizar' : 'Gravar'; ?>
                </button>
            </div>
        </form>
    </main>

    <footer>
        <?php require_once "_parts/_footer.php"; ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
