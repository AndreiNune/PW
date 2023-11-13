<!DOCTYPE html>

<head>
    <title>Excluir</title>
    <link rel="stylesheet" href="css/style.css" >
</head>
<body>
    <header>
        <nav>
            <ul class="nav__links">
            <il class="nav_links li"><button><a href="menu.html">Principal</a></button></il>
                <il class="nav_links li"><button><a href="CLivro.php">Cadastrar</a></button></il>
                <il class="nav_links li"><button><a href="LLivro.php">Listar</a></button></il>
            </ul>
        </nav>
    </header>

    <form name= "cliente" method = "POST" action = "">
        <fieldset id="a">
            <legend>
                <b> Informe o código correspondente ao livro desejado: </b>
                <br><br>
                <p> Codigo do Livro: <input name = "txtcod" type = "text" size = "20" maxlength = "5" placeholder = "Código do Livro:">
                <br><br>
                <center>
                <input name="btnenviar" type = "submit" value = "Excluir"> &nbsp;&nbsp;
                <input name="limpar" type = "reset" value = "Limpar">
            </legend>
            <br>
        </fieldset>
        <br>
    </form>

    <fieldset>
        <legend>
            <b> Resultado: </b>
        </legend>

        <?php
            extract($_POST, EXTR_OVERWRITE);
            if (isset($btnenviar)) 
            {
                include_once './model&conection/Livro.php';
                $liv = new Livro();
                $liv ->setCod_livro($txtcod);
                echo "<h3>" . $liv->excluir() . "<h3>"; //  Chama método -- o $p é o parâmetro enviado

            }

        ?>

    </fieldset>

</body>
</html>