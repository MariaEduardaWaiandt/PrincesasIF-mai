<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="CSS/baseAdmin.css" />
    <title>Gerenciar Empresa</title>
</head>

<body>
    <header>
        <?php require_once("_parts/_menu.php"); ?>
    </header>
    <main class="container mt-3">
        <?php
        spl_autoload_register(function ($class) {
            require_once "classes/{$class}.class.php";
        });

        if (filter_has_var(INPUT_POST, "idEmpresa")) {
            $empresaObj = new Empresa();
            $idEmpresa = intval(filter_input(INPUT_POST, "idEmpresa"));
            $empresa = $empresaObj->search("id", $idEmpresa);
        }
        ?>
        <form method="post" action="dbEmpresa.php" class="row g-3 mt-3">
            <input type="hidden" name="idEmpresa" value="<?php echo $empresa->id ?? null; ?>">

            <div class="col-12">
                <label for="Nome" class="form-label">Nome da Empresa</label>
                <input type="text" name="Nome" id="Nome" required class="form-control" placeholder="Digite o nome da empresa"
                    value="<?php echo $empresa->Nome ?? ''; ?>">
            </div>

            <div class="col-12">
                <label for="responsaveis" class="form-label">Nome do Responsável</label>
                <input type="text" name="responsaveis" id="responsaveis" required class="form-control" placeholder="Nome do responsável"
                    value="<?php echo $empresa->responsaveis ?? ''; ?>">
            </div>

            <div class="col-12">
                <label for="Cnpj" class="form-label">CNPJ</label>
                <input type="text" name="Cnpj" id="Cnpj" required class="form-control" placeholder="00.000.000/0000-00"
                    value="<?php echo $empresa->Cnpj ?? ''; ?>">
            </div>

            <div class="col-12">
                <label for="Telefones" class="form-label">Telefone</label>
                <input type="text" name="Telefones" id="Telefones" required class="form-control" placeholder="(00) 00000-0000"
                    value="<?php echo $empresa->Telefones ?? ''; ?>">
            </div>

            <div class="col-12">
                <label for="Endereco" class="form-label">Endereço</label>
                <input type="text" name="Endereco" id="Endereco" required class="form-control" placeholder="Endereço"
                    value="<?php echo $empresa->Endereco ?? ''; ?>">
            </div>

            <div class="col-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" required class="form-control" placeholder="Email"
                    value="<?php echo $empresa->email ?? ''; ?>">
            </div>

            <div class="col-12">
                <label for="ativ_eco" class="form-label">Atividade Econômica</label>
                <input type="text" name="ativ_eco" id="ativ_eco" required class="form-control" placeholder="Atividade Econômica"
                    value="<?php echo $empresa->ativ_eco ?? ''; ?>">
            </div>

            <div class="col-12">
                <label for="apresentacao" class="form-label">Apresentação</label>
                <textarea name="apresentacao" id="apresentacao" rows="3" required class="form-control" placeholder="Apresentação"><?php echo $empresa->apresentacao ?? ''; ?></textarea>
            </div>

            <div class="col-12">
                <label for="historico" class="form-label">Histórico</label>
                <textarea name="historico" id="historico" rows="3" required class="form-control" placeholder="Histórico"><?php echo $empresa->historico ?? ''; ?></textarea>
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
