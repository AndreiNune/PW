<!DOCTYPE html>

<head>
    <title>Cadastrar</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="ico/iat.ico" type="image/x-icon">
</head>

<body>
    <br>
    <br>
    <br>

    <form name="cliente" method="POST" action="">
        <fieldset id="a">
            <legend>
                <b>Dados da Autoria</b>
            </legend>
            <br>
            <p> <input name="txtcod" type="number" size="10" maxlength="10" placeholder="Codigo do autor: ">
            <p> <input name="txtcodl" type="number" size="10" placeholder="Codigo do Livro: "></p>
            <p> <input name="txtdate" type="date" size="8" placeholder="Data de Lançamento: "></p>
            <p> <input name="txtedit" type="text" size="40" placeholder="Editora: "></p>
            <p>

        </fieldset>
        <br>
        <fieldset id="b">
            <legend> <b> Opções: </b> </legend>
            <br>
            <input name="btnenviar" type="submit" value="Cadastrar"> &nbsp;&nbsp;
            <input name="limpar" type="reset" value="Limpar">
        </fieldset>

        <?php
        extract($_POST, EXTR_OVERWRITE);
        if (isset($btnenviar)) {
            $Cod_autor = $_POST["txtcod"];
            $Cod_livro = $_POST["txtcodl"];
            $DataLancamento = $_POST["txtdate"];
            $Editora = $_POST["txtedit"];


            include_once './model&conection/Autoria.php';

            $pro = new Autoria();

            $pro->setCod_autor($txtcod);
            $pro->setCod_livro($txtcodl);
            $pro->setDataLancamento($txtdate);
            $pro->setEditora($txtedit);



            echo "<h3><br><br>" . $pro->salvar() . "</h3>";

        }
        ?>

        <br>
        <center>

            <button><a href="menu.html"> Voltar ao menu</a></button>
            <button><a href="LAutoria.php"> Listagem </a></button>

</body>

</html>