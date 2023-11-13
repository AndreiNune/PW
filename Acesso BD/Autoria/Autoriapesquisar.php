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
                <il class="nav_links li"><button><a href="./Autoria.html">CRUD Autoria</a></button></il>
                
            </ul>
        </nav>
    </header>

    <center><b> Pesquisa de autorias registradas</b>
    
    <form name="cliente" method="POST" action="">
        <fieldset id="a">
            <legend>
                <b> Informe o código da autoria desejada: </b>
            </legend>
            <p>Nome da editora: <input name="txtedit" type="text" size="12" placeholder="">
            
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
        include_once './model&conection/Autoria.php';
        $aut = new Autoria();
        $aut ->setEditora($txtedit);
        $aut_bd=$aut->pesquisar();
        foreach ($aut_bd as $aut_mostrar) 
        {
            ?> <br>
            <b> <?php echo "Código do autor: " . $aut_mostrar[0]; ?>  &nbsp;&nbsp;&nbsp;&nbsp;
            <b> <?php echo "Código do livro: " . $aut_mostrar[1]; ?> &nbsp;&nbsp;&nbsp;&nbsp;
            <b> <?php echo "DataLançamento: " . $aut_mostrar[2]; ?> &nbsp;&nbsp;&nbsp;&nbsp;
            <b> <?php echo "Editora: " . $aut_mostrar[3]; ?> 
            <?php
        }

    }
 ?>

</fieldset>

    </form>

</body>
</html>