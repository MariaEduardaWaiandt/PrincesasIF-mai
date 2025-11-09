<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/baseAdmin.css">
    <title>Usuários</title>
</head>
<header>
        <?php require_once "_parts/_menu.php"; ?>
    </header>
<body>
    <main class="container mt-3">
        <div class="mt-3">
            <h3>Usuários</h3>
        </div>

        <div class="mt-3">
            <a href="usuario.php" class="btn btn-success">Novo Usuário</a>
        </div>

        <table class="table mt-3">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                spl_autoload_register(function ($class) {
                    require_once "classes/{$class}.class.php";
                });

                $usuarioObj = new Usuario();
                $usuarios = $usuarioObj->all();

                foreach ($usuarios as $usuario):
                    ?>
                    <tr>
                        <td><?php echo htmlspecialchars($usuario->id_usuario); ?></td>
                        <td><?php echo htmlspecialchars($usuario->nome); ?></td>
                        <td><?php echo htmlspecialchars($usuario->email); ?></td>
                        <td class="d-flex gap-1 justify-content-center">
                            <form action="<?php echo htmlspecialchars("geriUsuario.php") ?>" method="post" class="d-flex">
                                <input type="hidden" name="idUsuario"
                                    value="<?php echo htmlspecialchars($usuario->id_usuario); ?>">
                                <button name="btnEditar" class="btn btn-primary btn-sm" type="submit"
                                    onclick="return confirm('Tem certeza que deseja editar o usuário?');">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                            </form>

                            <form action="<?php echo htmlspecialchars("dbUsuario.php") ?>" method="post" class="d-flex">
                                <input type="hidden" name="idUsuario"
                                    value="<?php echo htmlspecialchars($usuario->id_usuario); ?>">
                                <button name="btnDeletar" class="btn btn-danger btn-sm" type="submit"
                                    onclick="return confirm('Tem certeza que deseja deletar o usuário?');">
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
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</body>

</html>