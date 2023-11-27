<!DOCTYPE html>

<head>
    <title>Cadastrar</title>
    <link rel="stylesheet" href="css/formg.css">
</head>

<body>

    <div class="wrapper">

        <h1>Cadastro de Autores</h1>


        <form name="cliente" method="POST" action="">

            <b>Dados dos Autores</b>

            <br>
            <p> <input name="txtcod" type="number" size="10" maxlength="40" placeholder="Codigo do autor: "> </p>
            <p> <input name="txtnome" type="text" size="30" placeholder="Nome: "></p>
            <p> <input name="txtsbnome" type="text" size="30" placeholder="Sobrenome: "></p>
            <p> <input name="txtemail" type="text" size="30" placeholder="Email: "></p>
            <p> <input name="txtnasc" type="date" size="8" placeholder="Nascimento: "></p>

            <br>

            <b> Opções: </b>
            <br>
            <input name="btnenviar" type="submit" value="Cadastrar"> &nbsp;&nbsp;
            <input name="limpar" type="reset" value="Limpar">

            <?php
            extract($_POST, EXTR_OVERWRITE);
            if (isset($btnenviar)) {
                $Cod_autor = $_POST["txtcod"];
                $NomeAutor = $_POST["txtnome"];
                $Sobrenome = $_POST["txtsbnome"];
                $Email = $_POST["txtemail"];
                $Nasc = $_POST["txtnasc"];

                include_once './model&conection/Autores.php';

                $pro = new Autor();

                $pro->setCod_autor($txtcod);
                $pro->setNomeAutor($txtnome);
                $pro->setSobrenome($txtsbnome);
                $pro->setEmail($txtemail);
                $pro->setNasc($txtnasc);


                echo "<h3><br><br>" . $pro->salvar() . "</h3>";
            }
            ?>

            <br>

            <button><a href="menu.php"> Voltar ao menu</a></button>
            <button><a href="LAutores.php"> Listagem </a></button>
    </div>



</body>

</html>