<!DOCTYPE html>

<head>
    <title>Pesquisar</title>
    <link rel="stylesheet" href="css/formg.css">
    <link rel="shortcut icon" href="ico/iat.ico" type="image/x-icon">
</head>

<body>

    <div class="wrapper">
        <h1> Pesquisa de Autores Cadastrados</h1>

        <form name="cliente" method="POST" action="">

            <b> Informe o nome do autor desejado: </b>

                <p><input name="txtnome" type="text" size="12" placeholder="Nome:"></p>
                <br>
                <input type="submit" name="btnenviar" value="Pesquisar">
                <input type="submit" name="limpar" type="reset" value="Limpar">

                <br>
                <br>
                <b>Resultado:</b>

                <?php
                extract($_POST, EXTR_OVERWRITE);
                if (isset($btnenviar)) {
                    include_once './model&conection/Autores.php';
                    $a = new Autor();
                    $a->setNomeAutor($txtnome);
                    $ato_bd = $a->pesquisar();
                    foreach ($ato_bd as $ato_mostrar) {
                ?> <br>
                        <b>
                            <?php echo "Cod_autor: " . $ato_mostrar[0]; ?> &nbsp;&nbsp;&nbsp;&nbsp;
                            <b>
                                <?php echo "Nome do Autor: " . $ato_mostrar[1]; ?> &nbsp;&nbsp;&nbsp;&nbsp;
                                <b>
                                    <?php echo "Sobrenome: " . $ato_mostrar[2]; ?> &nbsp;&nbsp;&nbsp;&nbsp;
                                    <b>
                                        <?php echo "Email: " . $ato_mostrar[3]; ?> &nbsp;&nbsp;&nbsp;&nbsp;
                                        <b>
                                            <?php echo "Nasc: " . $ato_mostrar[4]; ?>
                                    <?php
                                }
                            }
                                    ?>
                                    <br>
                                    <br>
                                    <p><b>Navegação:</b>
                                    <br>
                                    <button><a href="menu.php">Menu Principal</a></button>
                                    <br>
                                    <button><a href="Autores.php">Voltar ao menu Autores</a></button></p>
        </form>
    </div>
</body>

</html>