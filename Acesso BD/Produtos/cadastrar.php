<!DOCTYPE html>

<head>
    <title>Cadastrar</title>
    <link rel="stylesheet" href="css/style.css" >
</head>
<body>
    <div class="navstyle">
        <nav>
            <ul class="nav__links">
            <il class="nav_links li"><button><a href="menu.php">Principal</a></button></il>
                <il class="nav_links li"><button><a href="./cadastrar.php">Cadastrar</a></button></il>
                <il class="nav_links li"><button><a href="./excluir.php">Excluir</a></button></il>
                <il class="nav_links li"><button><a href="./pesquisar.php">Pesquisar</a></button></il>
                <il class="nav_links li"><button><a href="./listar.php">Listar</a></button></il>
                <il class="nav_links li"><button><a href="./alterar.php">Alterar</a></button></il>
            </ul>
        </nav>
    </div>
<div class="wrapper">

    <div class="formulario">
        
        <h1>Cadastrar-se</h1>

        <form name= "cliente" method = "POST" action = "">
                
                <h3>Dados do Produto</h3>
            
                <br>
                <p> Nome: <input name="txtnome" type = "text" size = "40" maxlength="40" placeholder = "Nome do Produto"></p>
                <br>
                <p> Estoque: <input name="txtestoq" type = "text" size = "10" placeholder = "0"></p>

            
            <br>
        
                 <b> Opções: </b> 
                <br>
                <br>
                <input name="btnenviar" type = "submit" value = "Cadastrar"> &nbsp;&nbsp;
                <input name="limpar" type = "reset" value = "Limpar">
        </form>
    </div>
    <br>

    <button><a href = "menu.html">  Voltar ao menu</a></button>
</div>

    
    <?php
    extract($_POST, EXTR_OVERWRITE);
    if(isset($btnenviar))
    {
        $Nome = $_POST["txtnome"];
        $Estoque = $_POST["txtestoq"];

        include_once './modelagem e conexção/Produto.php';
        $pro=new Produto();
        $pro->setNome($txtnome);
        $pro->setEstoque($txtestoq);
        echo "<h3><br><br>" . $pro->salvar() . "</h3>";

    }
    ?>

    <br>

        

</body>
</html>