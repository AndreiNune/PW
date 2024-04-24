<!DOCTYPE html>

<head>
    <title>Excluir</title>
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
        <h1>Excluir produtos</h1>

        <form name= "cliente" method = "POST" action = "">
        
                    <b> Informe o ID do porduto desejado: </b>
                    <p> Id: <input name = "txtid" type = "text" size = "20" maxlength = "5" placeholder = "id  do Produto:">
                    <br><br>
                    <input name="btnenviar" type = "submit" value = "Excluir"> &nbsp;&nbsp;
                    <input name="limpar" type = "reset" value = "Limpar">
            
                    <br>

        </form>

            <b> Resultado: </b>
        

        <?php
            extract($_POST, EXTR_OVERWRITE);
            if (isset($btnenviar)) 
            {
                include_once './modelagem e conexção/Produto.php';
                $p = new Produto();
                $p ->setId($txtid);
                echo "<h3>" . $p->excluir() . "<h3>"; //  Chama método -- o $p é o parâmetro enviado

            }

        ?>
        </div>

    </div>
    

</body>
</html>