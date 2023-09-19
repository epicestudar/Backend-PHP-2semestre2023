<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Novos Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <!--
Nome Completo
Data de Nascimento
Telefone
E-mail
Senha -->

    <div class="container">
        <h1>Cadastrar Novo(a) Usuário(a)</h1>
        <form action="processa_usuario.php">
            <div class="col-4">
                <label for="nome">Nome Completo</label>
                <input type="text" name="nome" id="nome" class="form-control">
            </div>

            <div class="col-4">
                <label for="dataNascimento">Data de Nascimento</label>
                <input type="date" name="dataNascimento" id="dataNascimento" class="form-control" value="1980-01-01">
            </div>

            <div class="col-4">
                <label for="telefone">Telefone para Contato</label>
                <input type="tel" name="telefone" id="telefone" class="form-control">
            </div>

            <div class="col-4">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>

            <div class="col-4">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" class="form-control">
            </div><br>

            <button type="submit" name="enviarDados" class="btn btn-primary">Cadastrar</button>
            <a href="index.php" class="btn btn-danger">Cancelar</a>

        </form>
    </div>
</body>

</html>