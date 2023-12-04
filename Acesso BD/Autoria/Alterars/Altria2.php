<!DOCTYPE html>

<head>
    <title>Alterar</title>
    <link rel="stylesheet" href="../css/formg.css">
    <link rel="shortcut icon" href="ico/iat.ico" type="image/x-icon">
</head>

<body>

    <div class="wrapper">

            <h1>Alteração de Dados</h1>
            <p>Reescreva o campo que deseja mudar:</p>
            <?php
            // erro encontrado e arrumado no getCod_autor para setCod_autor
            $txtid = $_POST["txtid"];
            include_once '../model&conection/Autoria.php';
            $p = new Autoria();
            $p->setCod_autor($txtid);
            $pro_bd = $p->alterar();
            ?>

            <br>
            <form name="cliente2" method="POST" action="Altria2.php">

                <?php
                foreach ($pro_bd as $pro_mostrar) {

                ?>
                    <input type="hidden" name="txtid" size="5" value='<?php echo $pro_mostrar[0] ?>'>
                    <b> <?php echo `Código do Autor: $pro_mostrar[0]`; ?></b> <!-- Sendo uma matriz a posição é 0 -->
                    <br><br>


                    <input type="hidden" name="txtcodl" size="25" value='<?php echo $pro_mostrar[1] ?>'>
                    <b><?php echo `Código do Livro: $pro_mostrar[1]`; ?></b>
                    <br><br>

                    <b><?php echo "Data de lançamento: "; ?></b>
                    <input type="text" name="txtdata" size="10" value='<?php echo $pro_mostrar[2] ?>'>

                    <b><?php echo "Editora: "; ?></b>
                    <input type="text" name="txtedit" size="10" value='<?php echo $pro_mostrar[3] ?>'>

                    <br><br><br>

                    <input name="btnalterar" type="submit" value="Finalizar alteração">
                <?php
                }
                ?>
            </form>

            <?php
            extract($_POST, EXTR_OVERWRITE);
            if (isset($btnalterar)) {
                include_once '../model&conection/Autoria.php';
                $pro = new Autoria();
                $pro->setCod_autor($txtid);
                $pro->setCod_livro($txtcodl);
                $pro->setDataLancamento($txtdata);
                $pro->setEditora($txtedit);
                echo "<br><br><h3>" . $pro->alterar2() .  "</h3>";
                header("location:Altria.php");
            }   
            ?>

            <br>

    </div>


</body>

</html>