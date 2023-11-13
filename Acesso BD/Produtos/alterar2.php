<!DOCTYPE html>

<head>
    <title>Alterar</title>
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
        <h1>Alteração de Dados</h1>
        <p>Reescreva o campo que deseja mudar:</p>
        <?php
                $txtid=$_POST["txtid"];
                include_once './modelagem e conexção/Produto.php';
                $p = new Produto();
                $p->setId($txtid);
                $pro_bd=$p->alterar();
            ?>

            <br>
            <form name= "cliente2" method = "POST" action = "">
            
            <?php
                foreach ($pro_bd as $pro_mostrar) 
                {
                 
            ?>
                <input type="hidden" name="txtid" size="5" value='<?php echo $pro_mostrar[0]?>'>
                <b> <?php echo `ID: $pro_mostrar[0]` // Sendo uma matriz a posição é 0 ?></b>
                <br><br> <b><?php echo "Nome: " ;?></b>

                <input type="text" name="txtnome" size="25" value='<?php echo $pro_mostrar[1]?>'>
                <br><br> <b> <?php echo "Estoque: " ;?></b>

                <input type="text" name="txtestoq" size="10" value='<?php echo $pro_mostrar[2]?>'>  
                <br><br><br><center>
                <input name="btnalterar" type="submit" value="Alterar">
            <?php
                }
            ?>
            </form>
        
        <?php
            extract($_POST, EXTR_OVERWRITE);
            if (isset($btnalterar)) {
                include_once './modelagem e conexção/Produto.php';
                $pro = new Produto();
                $pro->setNome($txtnome);
                $pro->setEstoque($txtestoq);
                $pro->setId($txtid);
                echo "<br><br><h3>" . $pro->alterar2() .  "</h3>";
                header("location:alterar.php");
            }
        ?>
    
    <br>
        </div>
    </div>
        

</body>
    </html>