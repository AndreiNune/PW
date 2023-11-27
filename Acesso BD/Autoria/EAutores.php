<!DOCTYPE html>

<head>
    <title>Excluir</title>
    <link rel="stylesheet" href="css/formg.css">
</head>

<body>
    <div class="wrapper">
        <form name="cliente" method="POST" action="">


            <b> Informe o código correspondente ao autor desejado: </b>
            <br><br>
            <p> Codigo do Autor: <input name="txtcod" type="text" size="20" maxlength="5" placeholder="Código do Autor:">
                <br><br>
                <input name="btnenviar" type="submit" value="Excluir"> &nbsp;&nbsp;
                <input name="limpar" type="reset" value="Limpar">
                <br>

                <br>

                <b> Resultado: </b>


                <?php
                extract($_POST, EXTR_OVERWRITE);
                if (isset($btnenviar)) {
                    include_once './model&conection/Autores.php';
                    $aut = new Autor();
                    $aut->setCod_autor($txtcod);
                    echo "<h3>" . $aut->excluir() . "<h3>"; //  Chama método -- o $p é o parâmetro enviado

                }

                ?>
                <br>
                <br>
                <button><a href="menu.php">Principal</a></button>
                <button><a href="CAutores.php">Cadastrar</a></button>
                <button><a href="LAutores.php">Listar</a></button>
        </form>
    </div>
</body>

</html>