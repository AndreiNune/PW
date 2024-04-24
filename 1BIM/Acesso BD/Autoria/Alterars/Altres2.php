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
        include_once '../model&conection/Autores.php';
        $p = new Autor();
        $p->setCod_autor($txtid);
        $pro_bd = $p->alterar();
        ?>

        <br>
        <form name="cliente2" method="POST" action="Altres2.php">

            <?php
            foreach ($pro_bd as $pro_mostrar) {

            ?>
                <input type="hidden" name="txtid" size="5" value='<?php echo $pro_mostrar[0] ?>'>
                <b> <?php echo `Código do autor: $pro_mostrar[0]`; ?></b> <!-- Sendo uma matriz a posição é 0 -->
                <br><br>

                <b><?php echo "Nome: "; ?></b>
                <input type="text" name="txtnome" size="25" value='<?php echo $pro_mostrar[1] ?>'>
                <br><br>

                <b><?php echo "Sobrenome: "; ?></b>
                <input type="text" name="txtsub" size="10" value='<?php echo $pro_mostrar[2] ?>'>

                <b><?php echo "Email: "; ?></b>
                <input type="text" name="txtemail" size="10" value='<?php echo $pro_mostrar[3] ?>'>

                <b><?php echo "Nascimento: "; ?></b>
                <input type="date" name="txtnasc" size="10" value='<?php echo $pro_mostrar[4] ?>'>

                <br><br><br>

                <input name="btnalterarl" type="submit" value="Finalizar alteração">
            <?php
            }
            ?>
        </form>

        <?php
        extract($_POST, EXTR_OVERWRITE);
        if (isset($btnalterarl)) {
            include_once '../model&conection/Autores.php';
            $pro = new Autor();
            $pro->setCod_autor($txtid);
            $pro->setNomeAutor($txtnome);
            $pro->setSobrenome($txtsub);
            $pro->setEmail($txtemail);
            $pro->setNasc($txtnasc);
            echo "<br><br><h3>" . $pro->alterar2() .  "</h3>";
            header("location:Altres.php");
        }
        ?>

        <br>

    </div>


</body>

</html>