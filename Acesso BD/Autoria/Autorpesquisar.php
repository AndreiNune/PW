<!DOCTYPE html>

<head>
    <title>Pesquisar</title>
    <link rel="stylesheet" href="css/style.css" >
</head>
<body>
    <header>
        <nav>
            <ul class="nav__links">
            <il class="nav_links li"><button><a href="menu.html">Principal</a></button></il>
                <il class="nav_links li"><button><a href="./Autores.php">CRUD Autor</a></button></il>
                
            </ul>
        </nav>
    </header>

    <center><b> Pesquisa de Autores Cadastrados</b>
    
    <form name="cliente" method="POST" action="">
        <fieldset id="a">
            <legend>
                <b> Informe o nome do autor desejado: </b>
            </legend>
            <p>Nome: <input name="txtnome" type="text" size="12" placeholder="">
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
        include_once 'Autores.php';
        $a = new Autor();
        $a ->setNomeAutor($txtnome);
        $ato_bd=$a->pesquisar();
        foreach ($ato_bd as $ato_mostrar) 
        {
            ?> <br>
            <b> <?php echo "Cod_autor: " . $ato_mostrar[0]; ?>  &nbsp;&nbsp;&nbsp;&nbsp;
            <b> <?php echo "Nome do Autor: " . $ato_mostrar[1]; ?> &nbsp;&nbsp;&nbsp;&nbsp;
            <b> <?php echo "Sobrenome: " . $ato_mostrar[2]; ?>  &nbsp;&nbsp;&nbsp;&nbsp;
            <b> <?php echo "Email: " . $ato_mostrar[3]; ?>  &nbsp;&nbsp;&nbsp;&nbsp;
            <b> <?php echo "Nasc: " . $ato_mostrar[4]; ?>   
            <?php
        }

    }
 ?>

</fieldset>

    </form>

</body>
</html>