<?php

session_start();
include_once("conex.php");

?>
<html>
<link rel="stylesheet" href="Sstilo.css">
                </html>

                <?php
    
                $nome=$_POST['nome'];
                $email=$_POST['email'];
                $telefone=$_POST['telefone'];
                $senha=$_POST['senha'];
                
                echo ("<h1>OK_.$nome._Bem vindo cadastrado com sucesso !</h1><br><br>");
                
                if(!empty($nome))
                {
                    $existe = mysqli_query($conn,"SELECT * FROM usuario  WHERE nome ='$nome'")
                     or die (" consulta indeferida");
                     
                     if(mysqli_fetch_assoc($existe)){
                         echo('<h1>NOME JA CADASTRADO ! FAÇA SEU LOGIN </h1>');
                            }
                            else{
                          mysqli_query($conn, "INSERT INTO usuario (nome, email, telefone, senha) VALUES ('$nome', '$email','$telefone','$senha')")
                        or die ("Não inseriu ");}

                }

                echo('<br><h1><a href="index.html"> Voltar </a><br><br> <a href="Login.php"> Login </a></h1>');
                ?>