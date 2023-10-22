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
                <il class="nav_links li"><button><a href="#exclusao">Excluir</a></button></il>
                <il class="nav_links li"><button><a href="#pesquisa">Pesquisar</a></button></il>
                <il class="nav_links li"><button><a href="./listar.php">Listar</a></button></il>
                <il class="nav_links li"><button><a href="#alterar">Alterar</a></button></il>
            </ul>
        </nav>
    </header>

    <?php
    extract($_POST, EXTR_OVERWRITE);
    if(isset($btnenviar))
    {
        $Nome = $_POST["txtnome"];
        $Estoque = $_POST["txtestoq"];

        include_once 'Produto.php';
        $pro=new Produto();
        $pro->setNome($txtnome);
        $pro->setEstoque($txtestoq);
        echo "<h3><br><br>" . $pro->salvar() . "</h3>";

    }
    ?>

    <br>
    <center>

        <button><a href = "menu.html">  Voltar </a></button>

</body>
    </html>