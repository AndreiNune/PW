<!DOCTYPE html>

<head>
    <title>Alterar</title>
    <link rel="stylesheet" href="../css/formg.css">
    <link rel="shortcut icon" href="ico/iat.ico" type="image/x-icon">
</head>

<body>

    <div class="wrapper">

        <h1>Alterar Dados</h1>

        <form name="cliente" method="POST" action="Altres2.php">


            <p>Digite o ID para acessar os dados do Autor que você deseja alterar:</p>

            <br>
            <br>
            <p> ID: <input name="txtid" type="text" size="15" maxlength="5" placeholder="ID do Autor">

                <br>
                <br>

                <legend> <b> Opções: </b> </legend>
                <br>
                <input name="btnenviar" type="submit" value="Alterar"> &nbsp;&nbsp;
                <input name="limpar" type="reset" value="Limpar">

                <legend> <b> Navegação: </b> </legend>
                <button><a href="../Autores.php">Voltar a Autores</a></button>
                <button><a href="../LAutores.php">Listagem</a></button>
        </form>
    </div>
</body>

</html>