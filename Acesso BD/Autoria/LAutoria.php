<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" >
    <title>Listar Autoria</title>
</head>
        
<body>

    <div class="pf">

        <?php

    include_once 'Autoria.php';

    $a = new Autoria();

    $autor_bd=$a->listar();

    ?>
    <br> Cod_autor &nbsp;&nbsp;&nbsp;&nbsp; Cod_livro &nbsp;&nbsp;&nbsp;&nbsp; DataLançamento &nbsp;&nbsp;&nbsp;&nbsp; Editora</br>

        <?php

    foreach($autor_bd as $autor_mostrar) {
    
    ?>
    <br><br>
    <b> <?php echo $autor_mostrar[0]; ?></b>&nbsp;&nbsp;&nbsp;&nbsp;
        <?php echo $autor_mostrar[1]; ?>    &nbsp;&nbsp;&nbsp;&nbsp;
        <?php echo $autor_mostrar[2]; ?>    &nbsp;&nbsp;&nbsp;&nbsp;
        <?php echo $autor_mostrar[3]; ?>  
    <?php

} 
    ?> 
    </div>
    <br>
    <center>

        <button><a href = "Autoria.html">  Voltar </a></button>
        <button><a href = "CAutoria.php">  Cadastrar </a></button>
        <button><a href = "EAutoria.php">  Excluir </a></button>
</body>
</html>
