<!DOCTYPE html>

<head>
    <title>Cadastrar</title>
    <link rel="stylesheet" href="css/style.css" >
</head>
<body>
    <header>
        <nav>
            <ul class="nav__links">
            <il class="nav_links li"><button><a href="menu.html">Principal</a></button></il>
                <il class="nav_links li"><button><a href="./cadastrar.php">Cadastrar</a></button></il>
                <il class="nav_links li"><button><a href="./pesquisar.php">Pesquisar</a></button></il>
                <il class="nav_links li"><button><a href="./listar.php">Listar</a></button></il>
            </ul>
        </nav>
    </header>

    <form name= "cliente" method = "POST" action = "">
        <fieldset id="a">
            <legend>
                <b> Informe o ID do porduto desejado: </b>
                <p> Id: <input name = "txtid" type = "text" size = "20" maxlength = "5" placeholder = "id  do Produto:">
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
                include_once 'Produto.php';
                $p = new Produto();
                $p ->setId($txtid);
                echo "<h3>" . $p->excluir() . "<h3>"; //  Chama método -- o $p é o parâmetro enviado

            }

        ?>

    </fieldset>

</body>
</html>