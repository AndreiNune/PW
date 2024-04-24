<!DOCTYPE html>

<head>
    <title>Excluir</title>
    <link rel="stylesheet" href="css/formg.css">
    <link rel="shortcut icon" href="ico/iat.ico" type="image/x-icon">
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
                <br><br><br>
                <b>Navegação:</b>
                <br><br>
                <button><a href="menu.php">Menu Principal</a></button>
                <button><a href="Autores.php">Voltar ao menu Autores</a></button>
                <button><a href="LAutores.php">Listar</a></button>
        </form>
    </div>
</body>

</html>