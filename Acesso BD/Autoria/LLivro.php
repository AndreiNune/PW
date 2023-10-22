<!DOCTYPE html>

<head>
    <title>Listar</title>
    <link rel="stylesheet" href="css/style.css" >
</head>
<body>

    <header>
        <nav>
            <ul class="nav__links">
            <il class="nav_links li"><button><a href="CLivro.php">Cadastrar</a></button></il>
            <il class="nav_links li"><button><a href="./LLivro.php">Listar</a></button></il>
                
            </ul>
        </nav>
    </header>

    <div class="pf">

    <?php
    
    include_once 'Livro.php';

    $l = new Livro();

    $lv_bd=$l->listar();

    ?>
   <br> Cod_livro &nbsp;&nbsp;&nbsp;&nbsp; Título &nbsp;&nbsp;&nbsp;&nbsp; Categoria &nbsp;&nbsp;&nbsp;&nbsp; ISBN &nbsp;&nbsp;&nbsp;&nbsp; Idioma &nbsp;&nbsp;&nbsp;&nbsp; Qtdepag</br>

    <?php

    foreach($lv_bd as $lv_mostrar) {
        
        ?>
        <br><br>
        <b> <?php echo $lv_mostrar[0]; ?></b>&nbsp;&nbsp;&nbsp;&nbsp;
            <?php echo $lv_mostrar[1]; ?>    &nbsp;&nbsp;&nbsp;&nbsp;
            <?php echo $lv_mostrar[2]; ?>    &nbsp;&nbsp;&nbsp;&nbsp;
            <?php echo $lv_mostrar[3]; ?>    &nbsp;&nbsp;&nbsp;&nbsp;
            <?php echo $lv_mostrar[4]; ?>
        <?php

    } 
        ?> 
        </div>
        <br>
        <center>

            <button><a href = "Livro.html">  Voltar </a></button>
            <button><a href = "ELivro.php">  Excluir </a></button>
</body>
</html>