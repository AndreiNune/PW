<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Acess</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="wrapper">
            <span style="--i:11"></span>
            <span style="--i:17"></span>
            <span style="--i:25"></span>
            <span style="--i:14"></span>
            <span style="--i:9"></span>
            <span style="--i:2"></span>
            <span style="--i:28"></span>
            <span style="--i:16"></span>
            <span style="--i:22"></span>
            <span style="--i:4"></span>
            <span style="--i:13"></span>
            <span style="--i:27"></span>
            <span style="--i:17"></span>
            <span style="--i:9"></span>
            <span style="--i:15"></span>
            <span style="--i:24"></span>
            <span style="--i:12"></span>
            <span style="--i:26"></span>
            <span style="--i:11"></span>
            <span style="--i:17"></span>
            <span style="--i:25"></span>

        <div class="formulario">

            <form method="POST" action="">
            <h1>Login</h1>

                <p>Digite os dados do seu Login:</p>
                <br><br>

                <p>Nome: <input name="txtnome" type="text" size="20" maxlength="20" placeholder="Digite seu nome aqui!"></p>
                <br>
                <p>Senha: <input name="txtsenha" type="text" size="20" maxlength="20" placeholder="Digite sua senha aqui!"
                        onkeypress="return blockw(window.event.keyCode)"></p>
                <br>
                <input type="submit" name="btnenviar" value="Fazer Login">

            </form>
            
            <?php

            extract($_POST, EXTR_OVERWRITE);
            if (isset($btnenviar)) {
                include_once 'model&conection/Usuario.php';
                $u = new Usuario();
                $u->setUsu($txtnome);
                $u->setSenha($txtsenha);
                $pro_bd = $u->logar();

                $existe = false;
                foreach ($pro_bd as $pro_mostrar) {
                    $existe = true;
                    ?>
                    <br><br>

                    <?php echo "Bem vindo! Usuário: " . $pro_mostrar[0]; ?>

                    <br><br>

                    <a href="menu.php"><input type="submit" name="btentrar" value="Entrar"></a>

                    <?php
                }
                if ($existe == false) {
                    header("location:loginInvalido.php");
                }
            }


            ?>

            
        </div>
            <span style="--i:14"></span>
            <span style="--i:9"></span>
            <span style="--i:2"></span>
            <span style="--i:28"></span>
            <span style="--i:16"></span>
            <span style="--i:22"></span>
            <span style="--i:4"></span>
            <span style="--i:13"></span>
            <span style="--i:27"></span>
            <span style="--i:17"></span>
            <span style="--i:9"></span>
            <span style="--i:15"></span>
            <span style="--i:24"></span>
            <span style="--i:12"></span>
            <span style="--i:26"></span>
            <span style="--i:11"></span>
            <span style="--i:17"></span>
            <span style="--i:25"></span>
            <span style="--i:14"></span>
            <span style="--i:9"></span>
            <span style="--i:2"></span>
    </div>
    <script type="text/javascript" src="./js/script.js"></script>
</body>

</html>