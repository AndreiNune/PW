<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/listar.css">
    <link rel="shortcut icon" href="ico/iat.ico" type="image/x-icon">
    <title>Listar Autoria</title>
</head>

<body>

    <div class="wrapper">

        <div class="form">
            <?php

            include_once './model&conection/Autoria.php';

            $a = new Autoria();

            $autor_bd = $a->listar();

            ?>
            <br> Cod_autor &nbsp;&nbsp;&nbsp;&nbsp; Cod_livro &nbsp;&nbsp;&nbsp;&nbsp; DataLançamento
            &nbsp;&nbsp;&nbsp;&nbsp; Editora</br>

            <?php

            foreach ($autor_bd as $autor_mostrar) {

            ?>
                <br><br>
                <b>
                    <?php echo $autor_mostrar[0]; ?>
                </b>&nbsp;&nbsp;&nbsp;&nbsp;
                <?php echo $autor_mostrar[1]; ?> &nbsp;&nbsp;&nbsp;&nbsp;
                <?php echo $autor_mostrar[2]; ?> &nbsp;&nbsp;&nbsp;&nbsp;
                <?php echo $autor_mostrar[3]; ?>
            <?php

            }
            ?>
        </div>

        <br>

        <button><a href="Autoria.php"> Voltar a Autoria</a></button>
        <button><a href="menu.php"> Menu Principal </a></button>
    </div>
</body>

</html>