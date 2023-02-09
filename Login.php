<?php
session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="login.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
      
    <form action="valida.php" method="post">
        <h3>LOGIN</h3>
        <label for="nome"> NOME DO USUARIO </label><br>
        <input type="text" name="nome" id="nome" placeholder="Nome De usuario" required><br>
        <Label for="senha"> SENHA</Label><br>
        <input type="password" name="senha" id="senha" placeholder=" Senha "><br>
        <input type="submit" value="Login">
        <label for="LINK"> <h1>
        
        <a href="index.html"> SAIR SEM LOGAR ! </a>

        </h1></label>
    </form>
    <h1>
    <?php

        if(isset($_SESSION['loginErro'])){
            echo $_SESSION['loginErro'];
            unset($_SESSION['loginErro']);
        }
    
    ?>
    </h1>
    <br>
    <footer>
       
    </footer>
</body>
</html>
