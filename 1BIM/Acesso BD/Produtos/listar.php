<!DOCTYPE html>

<head>
    <title>Listar</title>
    <link rel="stylesheet" href="css/style.css" >
</head>
<body>
    <div class="navstyle">
        <nav>
            <ul class="nav__links">
            <il class="nav_links li"><a href="menu.php"><button>Principal</button></a></il>
            <il class="nav_links li"><a href="./cadastrar.php"><button>Cadastrar</button></a></il>
                <il class="nav_links li"><a href="./excluir.php"><button>Excluir</button></a></il>
                <il class="nav_links li"><a href="./pesquisar.php"><button>Pesquisar</button></a></il>
                <il class="nav_links li"><a href="./listar.php"><button>Listar</button></a></il>
                <il class="nav_links li"><a href="./alterar.php"><button>Alterar</button></a></il>
            </ul>
        </nav>
    </div> 


<div class="wrapper">
    <div class="formulario">
        <h1>Listagem</h1>

        <div class="pf">

            <?php

            include_once './modelagem e conexção/Produto.php';

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
        <button><a href = "menu.html">  Voltar </a></button>
    </div>
</div>
       

            
</body>
</html>