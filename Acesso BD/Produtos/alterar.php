<!DOCTYPE html>

<head>
    <title>Alterar</title>
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
        <h1>Alterar Dados</h1>

        <form name= "cliente" method = "POST" action = "alterar2.php">
        
        
                <b>Digite o ID do produto que você deseja alterar:</b>


            <br>
            <p> ID: <input name="txtid" type = "text" size = "15" maxlength="5" placeholder = "ID do Produto">
    
            <br>
    
            <legend> <b> Opções: </b> </legend>
            <br>
            <input name="btnenviar" type = "submit" value = "Alterar"> &nbsp;&nbsp;
            <input name="limpar" type = "reset" value = "Limpar">
        
        </form>
    </div>
</div>

    

</body>
</html>