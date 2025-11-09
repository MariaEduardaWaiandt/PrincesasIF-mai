<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/base.css">
    <title>Cadastrar Empresa</title>
</head>
<header>
        <?php require_once "_parts/_menu.php"; ?>
    </header>
<body>

    <main class="container">
        <form class="row g-3" method="POST" action="dbEmpresa.php">
            <div class="col-md-6">
                <label for="inputNome" class="form-label">Nome da Empresa</label>
                <input type="text" name="Nome" class="form-control" id="inputNome" placeholder="Nome da empresa">
            </div>
            <div class="col-md-6">
                <label for="inputresponsaveis" class="form-label">Nome Reponsavel</label>
                <input type="text" name="responsaveis" class="form-control" id="inputresponsaveis" placeholder="Nome Responsavel">
            </div>
            <div class="col-md-6">
                <label for="inputCnpj" class="form-label">CNPJ</label>
                <input type="text" name="Cnpj" class="form-control" id="inputCnpj" placeholder="00.000.000/0000-00">
            </div>
            <div class="col-md-6">
                <label for="inputtelefones" class="form-label">Telefone</label>
                <input type="text" name="Telefones" class="form-control" id="inputtelefones" placeholder="(00) 00000-0000">
            </div>
            <div class="col-md-6">
                <label for="inputEndereco" class="form-label">Endereço</label>
                <input type="text" name="Endereco" class="form-control" id="inputEndereco" placeholder="Endereço">
            </div>
            <div class="col-md-6">
                <label for="inputemail" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" id="inputemail" placeholder="Email">
            </div>
            <div class="col-12">
                <label for="inputAtiv_eco" class="form-label">Atividade Economica</label>
                <input type="text" name="ativ_eco" class="form-control" id="inputAtiv_eco" placeholder="Atividade Economica">
            </div>
            <div class="col-12">
                <label for="inputApresentacao" class="form-label">Apresentação</label>
                <input type="text" name="apresentacao" class="form-control" id="inputApresentacao" placeholder="Apresentação">
                </label>
            </div>
            <div class="col-12">
                <label for="inputHistorico" class="form-label">Historico</label>
                <input type="text" name="historico" class="form-control" id="inputHistorico" placeholder="Historico">
                </label>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary" name="Cadastrar">Cadastrar</button>
            </div>

        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
<footer>
        <?php require_once "_parts/_footer.php"; ?>
    </footer>
</body>

</html>