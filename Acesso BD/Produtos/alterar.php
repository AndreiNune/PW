<!DOCTYPE html>

<head>
    <title>Alterar</title>
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
                <il class="nav_links li"><button><a href="./alterar.php">Alterar</a></button></il>
            </ul>
        </nav>
    </header>

    <form name= "cliente" method = "POST" action = "alterar2.php">
        <fieldset>
            <legend>
                <b>Digite o ID do produto que você deseja alterar:</b>
            </legend>

            <br>
            <p> ID: <input name="txtid" type = "text" size = "12" maxlength="5" placeholder = "ID do Produto">
        
            <br>
        
            <legend> <b> Opções: </b> </legend>
            <br>
            <input name="btnenviar" type = "submit" value = "Alterar"> &nbsp;&nbsp;
            <input name="limpar" type = "reset" value = "Limpar">
        </fieldset>
    </form>
    <br>

</body>
    </html>