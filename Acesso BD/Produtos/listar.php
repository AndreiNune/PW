<!DOCTYPE html>

<head>
    <title>Listar</title>
    <link rel="stylesheet" href="css/style.css" >
</head>
<body>
    <header>
        <nav>
            <ul class="nav__links">
            <il class="nav_links li"><button><a href="menu.html">Principal</a></button></il>
                <il class="nav_links li"><button><a href="./cadastrar.php">Cadastrar</a></button></il>
                <il class="nav_links li"><button><a href="./excluir.php">Excluir</a></button></il>
                <il class="nav_links li"><button><a href="./pesquisar.php">Pesquisar</a></button></il>
                <il class="nav_links li"><button><a href="./listar.php">Listar</a></button></il>
                <il class="nav_links li"><button><a href="#alterar">Alterar</a></button></il>
            </ul>
        </nav>
    </header> 

       <div class="pf">

    <?php
    
    include_once 'Produto.php';

    $p = new Produto();

    $pro_bd=$p->listar();

    ?>
<br> Id &nbsp;&nbsp;&nbsp;&nbsp; Nome &nbsp;&nbsp;&nbsp;&nbsp;Estoque</br>

    <?php

    foreach($pro_bd as $pro_mostrar) {
        
        ?>
        <br><br>
        <b> <?php echo $pro_mostrar[0]; ?></b>&nbsp;&nbsp;&nbsp;&nbsp;
            <?php echo $pro_mostrar[1]; ?>    &nbsp;&nbsp;&nbsp;&nbsp;
            <?php echo $pro_mostrar[2]; ?>
        <?php

    } 
        ?> 
        </div>
        <br>
        <center>

            <button><a href = "menu.html">  Voltar </a></button>
</body>
</html>