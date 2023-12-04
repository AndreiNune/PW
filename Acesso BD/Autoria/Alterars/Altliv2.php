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
        include_once '../model&conection/Livro.php';
        $l = new Livro();
        $l->setCod_livro($txtid);
        $liv_bd = $l->alterar();
        ?>

        <br>
        <form name="cliente2" method="POST" action="Altliv2.php">

            <?php
            foreach ($liv_bd as $liv_mostrar) {

            ?>
                <input type="hidden" name="txtid" size="5" value='<?php echo $liv_mostrar[0] ?>'>
                <b> <?php echo `Código do Livro: $liv_mostrar[0]`; ?></b> <!-- Sendo uma matriz a posição é 0 -->
                <br><br>

                <b><?php echo "Titulo: "; ?></b>
                <input type="text" name="txttitle" size="25" value='<?php echo $liv_mostrar[1] ?>'>
                <br><br>

                <b><?php echo "Categoria: "; ?></b>
                <input type="text" name="txtcatg" size="10" value='<?php echo $liv_mostrar[2] ?>'>

                <b><?php echo "ISBN: "; ?></b>
                <input type="text" name="txtisbn" size="10" value='<?php echo $liv_mostrar[3] ?>'>

                <b><?php echo "Idioma: "; ?></b>
                <input type="text" name="txtidio" size="10" value='<?php echo $liv_mostrar[4] ?>'>

                <b><?php echo "Qtdepag: "; ?></b>
                <input type="number" name="txtqt" size="10" value='<?php echo $liv_mostrar[5] ?>'>

                <br><br><br>

                <input name="btnalterarl" type="submit" value="Finalizar alteração">
            <?php
            }
            ?>
        </form>

        <?php
        extract($_POST, EXTR_OVERWRITE);
        if (isset($btnalterarl)) {
            include_once '../model&conection/Livro.php';
            $pro = new Livro();
            $pro->setCod_livro($txtid);
            $pro->setTítulo($txttitle);
            $pro->setCategoria($txtcatg);
            $pro->setISBN($txtisbn);
            $pro->setIdioma($txtido);
            $pro->setQtdepag($txtqt);
            echo "<br><br><h3>" . $pro->alterar2() .  "</h3>";
            header("location:Altliv.php");
        }
        ?>

        <br>

    </div>


</body>

</html>