<?php
spl_autoload_register(function ($class) {
    require_once "classes/{$class}.class.php";
});

$empresaObj = new Empresa();
$empresas = $empresaObj->all();

$empresa = null;
if (filter_has_var(INPUT_POST, "btnEditar")) {
    $id = intval(filter_input(INPUT_POST, "id"));
    $empresa = $empresaObj->search("id", $id);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="CSS/baseAdmin.css" />
    <title>Empresas</title>
</head>

<body>
    <header>
        <?php require_once "_parts/_menu.php"; ?>
    </header>

    <main class="container mt-3">
        <div class="mt-3">
            <h3>Empresas</h3>
        </div>

        <div class="mt-3">
            <a href="cadasempresa.php" class="btn btn-success">Nova Empresa</a>
        </div>

        <table class="table mt-3">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>CNPJ</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($empresas as $empresaItem): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($empresaItem->id); ?></td>
                        <td><?php echo htmlspecialchars($empresaItem->nome); ?></td>
                        <td><?php echo htmlspecialchars($empresaItem->cnpj); ?></td>
                        <td><?php echo htmlspecialchars($empresaItem->telefones); ?></td>
                        <td class="d-flex gap-1 justify-content-center">
                            <form action="empresa.php" method="post" class="d-flex me-1">
                                <input type="hidden" name="id" value="<?php echo htmlspecialchars($empresaItem->id); ?>">
                                <button name="btnEditar" class="btn btn-primary btn-sm" type="submit"
                                    onclick="return confirm('Tem certeza que deseja editar esta empresa?');">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                            </form>

                            <form action="dbEmpresa.php" method="post" class="d-flex">
                                <input type="hidden" name="idEmpresa" value="<?php echo htmlspecialchars($empresaItem->id); ?>">
                                <button name="btnDeletar" class="btn btn-danger btn-sm" type="submit"
                                    onclick="return confirm('Tem certeza que deseja deletar esta empresa?');">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <?php if ($empresa): ?>
            <hr class="my-4" />
            <h2 class="text-center">Editar Empresa</h2>

            <form action="dbEmpresa.php" method="post" class="row mt-3">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($empresa->id ?? ''); ?>">

                <div class="col-md-6">
                    <label for="Nome" class="form-label">Nome da Empresa</label>
                    <input type="text" name="Nome" id="Nome" required class="form-control"
                        value="<?php echo htmlspecialchars($empresa->nome ?? ''); ?>" placeholder="Nome da empresa">
                </div>

                <div class="col-md-6">
                    <label for="responsaveis" class="form-label">Nome do Responsável</label>
                    <input type="text" name="responsaveis" id="responsaveis" required class="form-control"
                        value="<?php echo htmlspecialchars($empresa->responsaveis ?? ''); ?>" placeholder="Nome do responsável">
                </div>

                <div class="col-md-6">
                    <label for="Cnpj" class="form-label">CNPJ</label>
                    <input type="text" name="Cnpj" id="Cnpj" required class="form-control"
                        value="<?php echo htmlspecialchars($empresa->cnpj ?? ''); ?>" placeholder="00.000.000/0000-00">
                </div>

                <div class="col-md-6">
                    <label for="Telefones" class="form-label">Telefone</label>
                    <input type="text" name="Telefones" id="Telefones" required class="form-control"
                        value="<?php echo htmlspecialchars($empresa->telefones ?? ''); ?>" placeholder="(00) 00000-0000">
                </div>

                <div class="col-md-6">
                    <label for="Endereco" class="form-label">Endereço</label>
                    <input type="text" name="Endereco" id="Endereco" required class="form-control"
                        value="<?php echo htmlspecialchars($empresa->endereco ?? ''); ?>" placeholder="Endereço">
                </div>

                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" required class="form-control"
                        value="<?php echo htmlspecialchars($empresa->email ?? ''); ?>" placeholder="Email">
                </div>

                <div class="col-12">
                    <label for="ativ_eco" class="form-label">Atividade Econômica</label>
                    <input type="text" name="ativ_eco" id="ativ_eco" required class="form-control"
                        value="<?php echo htmlspecialchars($empresa->ativ_eco ?? ''); ?>" placeholder="Atividade Econômica">
                </div>

                <div class="col-12">
                    <label for="apresentacao" class="form-label">Apresentação</label>
                    <textarea name="apresentacao" id="apresentacao" rows="3" required class="form-control"
                        placeholder="Apresentação"><?php echo htmlspecialchars($empresa->apresentacao ?? ''); ?></textarea>
                </div>

                <div class="col-12">
                    <label for="historico" class="form-label">Histórico</label>
                    <textarea name="historico" id="historico" rows="3" required class="form-control"
                        placeholder="Histórico"><?php echo htmlspecialchars($empresa->historico ?? ''); ?></textarea>
                </div>

                <div class="col-12 mt-3">
                    <button type="submit" name="Cadastrar" class="btn btn-outline-dark">Atualizar Empresa</button>
                </div>
            </form>
        <?php endif; ?>
    </main>

    <footer>
        <?php require_once "_parts/_footer.php"; ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
</body>

</html>
