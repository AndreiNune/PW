<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Acess</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="wrapper">
        <div class="formulario">
                <h1>Login</h1>
            <form method="POST"action="">
            
            <p>Digite os dados do seu Login:</p>
            <br><br>

            <p>Nome: <input name="txtnome" type = "text" size = "20" maxlength="20" placeholder = "Nome"></p>
            <br>
            <p>Senha: <input name="txtsenha" type = "text" size = "20" maxlength="20" placeholder = "Senha" onkeypress="return blockw(window.event.keyCode)"></p>
            <br>
            <input type="submit" name="btnenviar" value="Fazer Login">

            </form>

            <?php

        extract($_POST, EXTR_OVERWRITE);
        if (isset($btnenviar)) 
        {
            include_once 'modelagem e conexção/Usuario.php';
            $u = new Usuario();
            $u->setUsu($txtnome);
            $u->setSenha($txtsenha);
            $pro_bd=$u->logar();

            $existe = false;
            foreach ($pro_bd as $pro_mostrar) 
            {
                $existe = true;
                ?>
                <br><br>

                <?php echo "Bem vindo! Usuário: " .$pro_mostrar[0]; ?>

                <br><br>
                
                <a href="menu.php"><input type="submit" name="btentrar" value="Entrar"></a> 

            <?php
            }
            if ($existe==false) 
            {
                header("location:loginInvalido.php");
            }
        }
        

    ?>

        </div>
    </div>
<script type="text/javascript" src="./js/script.js"></script>
</body>
</html>