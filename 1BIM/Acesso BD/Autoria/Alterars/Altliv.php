<!DOCTYPE html>

<head>
    <title>Alterar</title>
    <link rel="stylesheet" href="../css/formg.css">
    <link rel="shortcut icon" href="ico/iat.ico" type="image/x-icon">
</head>

<body>

    <div class="wrapper">

        <h1>Alterar Dados</h1>

        <form name="cliente" method="POST" action="Altliv2.php">


            <p>Digite o ID para acessar os dados do <br>Livro que você deseja alterar:

            <br>
            <br>
            <p> Código: <input name="txtid" type="text" size="15" maxlength="5" placeholder="Código da Livro">

                <br>
                <br>

                <legend><b> Opções: </b></legend> 
                <br>
                <input name="btnenviar" type="submit" value="Alterar"> &nbsp;&nbsp;
                <input name="limpar" type="reset" value="Limpar">
                <br><br>

                <legend><b>Navegação:</b></legend>
                <br>
                <button><a href="../Livro.php">Voltar a Livro</a></button>
                <button><a href="../LLivro.php">Listagem</a></button>
        </form>
    </div>
</body>

</html>