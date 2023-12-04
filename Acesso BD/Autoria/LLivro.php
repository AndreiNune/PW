<!DOCTYPE html>

<head>
    <title>Listar</title>
    <link rel="stylesheet" href="css/listar.css">
    <link rel="shortcut icon" href="ico/iat.ico" type="image/x-icon">
</head>

<body>

    <div class="wrapper">
        <div class="form">


            <?php

            include_once './model&conection/Livro.php';

            $l = new Livro();

            $lv_bd = $l->listar();

            ?>
            <br> Cod_livro &nbsp;&nbsp;&nbsp;&nbsp; Título &nbsp;&nbsp;&nbsp;&nbsp; Categoria &nbsp;&nbsp;&nbsp;&nbsp; ISBN
            &nbsp;&nbsp;&nbsp;&nbsp; Idioma &nbsp;&nbsp;&nbsp;&nbsp; Qtdepag</br>

            <?php

            foreach ($lv_bd as $lv_mostrar) {

            ?>
                <br><br>
                <b>
                    <?php echo $lv_mostrar[0]; ?>
                </b>&nbsp;&nbsp;&nbsp;&nbsp;
                <?php echo $lv_mostrar[1]; ?> &nbsp;&nbsp;&nbsp;&nbsp;
                <?php echo $lv_mostrar[2]; ?> &nbsp;&nbsp;&nbsp;&nbsp;
                <?php echo $lv_mostrar[3]; ?> &nbsp;&nbsp;&nbsp;&nbsp;
                <?php echo $lv_mostrar[4]; ?> &nbsp;&nbsp;&nbsp;&nbsp;
                <?php echo $lv_mostrar[5]; ?>
            <?php

            }
            ?>

        </div>
        <button><a href="Livro.php"> Voltar a Livro</a></button>
        <button><a href="menu.php"> Menu Principal</a></button>
    </div>
    <br>

</body>

</html>