<!DOCTYPE html>

<head>
    <title>Cadastrar</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <nav>
            <ul class="nav__links">
                <il class="nav_links li"><button><a href="menu.html">Principal</a></button></il>
                <il class="nav_links li"><button><a href="./LLivro.php">Listar</a></button></il>

            </ul>
        </nav>
    </header>

    <form name="cliente" method="POST" action="">
        <b>Dados do Livro</b>

        <br>
        <p> Código: <input name="txtcod" type="number" size="11" maxlength="11">
        <p> Título: <input name="txttitul" type="text" size="50">
        <p> Categoria: <input name="txtcateg" type="text" size="35" maxlength="35">
        <p> ISBN: <input name="txtisbn" type="number" size="15">
        <p> Idioma: <input name="txtidioma" type="text" size="30" maxlength="30">
        <p> Qtdepag: <input name="txtqtde" type="number" size="11" maxlength="15"></p>


        <br>
        <legend> <b> Opções: </b> </legend>
        <br>
        <input name="btnenviar" type="submit" value="Cadastrar"> &nbsp;&nbsp;
        <input name="limpar" type="reset" value="Limpar">
    </form>
    <?php
    extract($_POST, EXTR_OVERWRITE);
    if (isset($btnenviar)) {
        $Cod_Livro = $_POST["txtcod"];
        $Título = $_POST["txttitul"];
        $Categoria = $_POST["txtcateg"];
        $ISBN = $_POST["txtisbn"];
        $Idioma = $_POST["txtidioma"];
        $Qtdepag = $_POST["txtqtde"];

        include_once './model&conection/Livro.php';

        $liv = new Livro();

        $liv->setCod_livro($txtcod);
        $liv->setTítulo($txttitul);
        $liv->setCategoria($txtcateg);
        $liv->setISBN($txtisbn);
        $liv->setIdioma($txtidioma);
        $liv->setQtdepag($txtqtde);

        echo "<h3><br><br>" . $liv->salvar() . "</h3>";

    }
    ?>

    <br>

    <button><a href="menu.html"> Voltar </a></button>

</body>

</html>