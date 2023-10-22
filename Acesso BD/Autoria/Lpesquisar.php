<!DOCTYPE html>

<head>
    <title>Pesquisar Livro</title>
    <link rel="stylesheet" href="css/style.css" >
</head>
<body>
    <header>
        <nav>
            <ul class="nav__links">
            <il class="nav_links li"><button><a href="menu.html">Principal</a></button></il>
                <il class="nav_links li"><button><a href="./Livro.html">CRUD Livro</a></button></il>
                
            </ul>
        </nav>
    </header>

    <center><b> Pesquisa de Livros Cadastrados</b>
    
    <form name="cliente" method="POST" action="">
        <fieldset id="a">
            <legend>
                <b> Informe o nome do livro desejado: </b>
            </legend>
            <p>Título do livro: <input name="txtnome" type="text" size="25" placeholder="">
            <br><br><center>
                <input type="submit" name="btnenviar" value="Pesquisar">
                <input type="submit" name="limpar" type="reset" value="Limpar">
        </fieldset>

<br>

<fieldset>
    <legend><b>Resultados:</b></legend>

    <?php
    extract($_POST, EXTR_OVERWRITE);
    if (isset($btnenviar)) 
    {
        include_once 'Livro.php';
        $l = new Livro();
        $l ->setTítulo($txtnome);
        $liv_bd=$l->pesquisar();
        foreach ($liv_bd as $liv_mostrar) 
        {
            ?> <br>
            <b> <?php echo "Código: " . $liv_mostrar[0]; ?>  &nbsp;&nbsp;&nbsp;&nbsp;
            <b> <?php echo "Título: " . $liv_mostrar[1]; ?> &nbsp;&nbsp;&nbsp;&nbsp;
            <b> <?php echo "Categoria: " . $liv_mostrar[2]; ?> &nbsp;&nbsp;&nbsp;&nbsp;
            <b> <?php echo "ISBN: " . $liv_mostrar[3]; ?> &nbsp;&nbsp;&nbsp;&nbsp;
            <b> <?php echo "Idioma: " . $liv_mostrar[4]; ?> &nbsp;&nbsp;&nbsp;&nbsp;
            <b> <?php echo "QtdePag: " . $liv_mostrar[5]; ?>
            <?php   
        }

    }
 ?>

</fieldset>

    </form>

</body>
</html>