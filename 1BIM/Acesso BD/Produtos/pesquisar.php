<!DOCTYPE html>

<head>
    <title>Pesquisar</title>
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

            <h1> Pesquisa de Produtos </h1> 
    
        <form name="cliente" method="POST" action="">
            
            <b> Informe o nome do produto desejado: </b>
            <p>Nome: <input name="txtnome" type="text" size="20" placeholder="Nome do produto">
            <br><br>
                <input type="submit" name="btnenviar" value="Pesquisar">
                <input type="submit" name="limpar" type="reset" value="Limpar">
                <br>
                <br>

        <h3>Resultado:</h3>

        <div class="result">
        
        <br>
        <?php
        extract($_POST, EXTR_OVERWRITE);
        if (isset($btnenviar)) 
        {
            include_once './modelagem e conexção/Produto.php';
            $p = new Produto();
            $p ->setNome($txtnome);
            $pro_bd=$p->pesquisar();
            foreach ($pro_bd as $pro_mostrar) 
            {
                ?> <br>
                <b> <?php echo "ID: " . $pro_mostrar[0]; ?>  &nbsp;&nbsp;&nbsp;&nbsp;
                <b> <?php echo "Nome: " . $pro_mostrar[1]; ?> &nbsp;&nbsp;&nbsp;&nbsp;
                <b> <?php echo "Estoque: " . $pro_mostrar[2]; ?> 
                <?php
            }

    }
 ?>
            </div>

        </form>

    </div>
    
</div> 

</body>
</html>