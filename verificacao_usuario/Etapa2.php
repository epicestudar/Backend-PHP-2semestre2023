<html>
<title>Desenvolvendo websites com PHP</title>
<body>
<p align="center"><big></big><strong> Cadastramento - Etapa 2 de 3</strong><big></big>
</p>
<form method="POST" action="Etapa3.php">
    <input type="hidden" name="nome" value="<?php echo $_POST["nome"]; ?>">
    <input type="hidden" name="email" value="<?php echo $_POST["email"]; ?>">
    <input type="hidden" name="dataNascimento" value="<?php echo $_POST["dataNascimento"]; ?>">
    <input type="hidden" name="sexo" value="<?php echo $_POST["sexo"]; ?>">
    <input type="hidden" name="profissao" value="<?php echo $_POST["profissao"]; ?>">

    <div align="center"><center>
            <p>Telefone: <input type="tel" name="telefone" size="20"></p>
        </center>
    </div>

    <div align="center"><center>
            <p>Endereço: <input type="text" name="endereco" size="20"></p>
        </center>
    </div>

    <div align="center"><center>
            <p>Cidade: <input type="text" name="cidade" size="20">&nbsp;&nbsp;&nbsp;</p>
        </center>
    </div>

    <div align="center"><center>
            <p>Estado: <input type="text" name="estado" size="2"></p>
        </center>
    </div>

    <div align="center"><center>
            <p>CEP: <input type="text" name="cep" size="9"></p>
        </center>
    </div>

    <div align="center"><center>
            <p><input type="submit" value="Prosseguir &gt;&gt;" name="prosseguir"></p>
        </center>
    </div>
</form>
</body>

</html>
