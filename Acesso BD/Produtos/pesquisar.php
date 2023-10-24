<!DOCTYPE html>

<head>
    <title>Cadastrar</title>
    <link rel="stylesheet" href="css/style.css" >
</head>
<body>
    <header>
        <nav>
            <ul class="nav__links">
            <il class="nav_links li"><button><a href="menu.html">Principal</a></button></il>
                <il class="nav_links li"><button><a href="./cadastrar.php">Cadastrar</a></button></il>
                <il class="nav_links li"><button><a href="./excluir.php">Excluir</a></button></il>
                <il class="nav_links li"><button><a href="./listar.php">Listar</a></button></il>
                <il class="nav_links li"><button><a href="./alterar.php">Alterar</a></button></il>
            </ul>
        </nav>
    </header>

    <center><b> Pesquisa de Produtos Cadastrados</b>
    
    <form name="cliente" method="POST" action="">
        <fieldset id="a">
            <legend>
                <b> Informe o nome do produto desejado: </b>
            </legend>
            <p>Nome: <input name="txtnome" type="text" size="20" placeholder="Nome do produto">
            <br><br><center>
                <input type="submit" name="btnenviar" value="Pesquisar">
                <input type="submit" name="limpar" type="reset" value="Limpar">
        </fieldset>

<br>

<fieldset>
    <legend><b>Resultado:</b></legend>

    <?php
    extract($_POST, EXTR_OVERWRITE);
    if (isset($btnenviar)) 
    {
        include_once 'Produto.php';
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

</fieldset>

    </form>

</body>
</html>