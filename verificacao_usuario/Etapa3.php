<html>
<title>Desenvolvendo Websites com PHP</title>
<body>

<p align="center"><big><big><strong>Cadastramento - Etapa 3 de 3</strong></big></big></p>

<form method="POST" action="cadastra.php">

    <input type="hidden" name="nome" value="<?php echo $_POST["nome"]; ?>">
    <input type="hidden" name="email" value="<?php echo $_POST["email"]; ?>">
    <input type="hidden" name="datanascimento" value="<?php echo $_POST["datanascimento"]; ?>">
    <input type="hidden" name="sexo" value="<?php echo $_POST["sexo"]; ?>">
    <input type="hidden" name="profissao" value="<?php echo $_POST["$profissao"]; ?>">

    <input type="hidden" name="telefone" value="<?php echo $_POST["telefone"]; ?>">
    <input type="hidden" name="endereco" value="<?php echo $_POST["endereco"]; ?>">
    <input type="hidden" name="cidade" value="<?php echo $_POST["cidade"]; ?>">
    <input type="hidden" name="estado" value="<?php echo $_POST["estado"]; ?>">
    <input type="hidden" name="cep" value="<?php echo $_POST["cep"]; ?>">


    <div align="center"><center><p>Username: <input type="text" name="username" size="10"></p>
        </center></div><div align="center"><center><p>Senha: <input type="text" name="senha"
                                                                    size="10"></p>
        </center></div><div align="center"><center><p>Confirme sua Senha: <input type="text"
                                                                                 name="confirma_senha" size="10"></p>
        </center></div><div align="center"><center><p><input type="submit"
                                                             value="Finalizar Cadastro" name="fim"></p>
        </center></div>

</form>

</body>
</html>