<!DOCTYPE html>

<head>
    <title>Listar</title>
    <link rel="stylesheet" href="css/listar.css" >
</head>
<body>

       <div class="pfl">

    <?php
    
    include_once 'Autores.php';

    $a = new Autor();

    $autor_bd=$a->listar();

    ?>
<br> Cod_autor &nbsp;&nbsp;&nbsp;&nbsp; NomeAutor &nbsp;&nbsp;&nbsp;&nbsp; Sobrenome &nbsp;&nbsp;&nbsp;&nbsp; Email &nbsp;&nbsp;&nbsp;&nbsp; Nasc</br>

    <?php

    foreach($autor_bd as $autor_mostrar) {
        
        ?>
        <br><br>
        <b> <?php echo $autor_mostrar[0]; ?></b>&nbsp;&nbsp;&nbsp;&nbsp;
            <?php echo $autor_mostrar[1]; ?>    &nbsp;&nbsp;&nbsp;&nbsp;
            <?php echo $autor_mostrar[2]; ?>    &nbsp;&nbsp;&nbsp;&nbsp;
            <?php echo $autor_mostrar[3]; ?>    &nbsp;&nbsp;&nbsp;&nbsp;
            <?php echo $autor_mostrar[4]; ?>
        <?php

    } 
        ?> 
        </div>
        <br>
        <br>
        <div class="bts">
            <button><a href = "menu.html"> Menu </a></button>
            <button><a href = "EAutores.php"> Excluir </a></button>
            <button><a href = "CAutores.php">  Ir ao Cadastro </a></button>
        </div>

            
</body>
</html>