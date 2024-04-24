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

            include_once './model&conection/Autores.php';

            $a = new Autor();

            $autor_bd = $a->listar();

            ?>
            <br> Cod_autor &nbsp;&nbsp;&nbsp;&nbsp; NomeAutor &nbsp;&nbsp;&nbsp;&nbsp; Sobrenome
            &nbsp;&nbsp;&nbsp;&nbsp; Email &nbsp;&nbsp;&nbsp;&nbsp; Nasc</br>

            <?php

            foreach ($autor_bd as $autor_mostrar) {

                ?>
                <br><br>
                <b>
                    <?php echo $autor_mostrar[0]; ?>
                </b>&nbsp;&nbsp;&nbsp;&nbsp;
                <?php echo $autor_mostrar[1]; ?> &nbsp;&nbsp;&nbsp;&nbsp;
                <?php echo $autor_mostrar[2]; ?> &nbsp;&nbsp;&nbsp;&nbsp;
                <?php echo $autor_mostrar[3]; ?> &nbsp;&nbsp;&nbsp;&nbsp;
                <?php echo $autor_mostrar[4]; ?>
                <?php

            }
            ?>
            <br>
            <br>
            <br>
            <button><a href="menu.php"> Menu Principal</a></button>
            <button><a href="Autores.php">Voltar ao menu Autores</a></button>
        </div>
        
    </div>

    <br>
    <br>

</body>

</html>