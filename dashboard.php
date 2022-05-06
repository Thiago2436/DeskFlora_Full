<?php

session_start();
include_once("conex.php");

?>
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
    <style>
            body{
                background-color: darkslategray;
                border-style: hidden;
                border-radius: 25px;
                }
            h1{
                text-align: center;
                border-radius: 10px;
                background-color: rgba(211, 231, 211, 0.596);
                border-style: hidden;
                font-size: large;
            }
            p{
                text-align: center;
                border-radius: 10px;
                background-color: rgba(211, 231, 211, 0.596);
                border-style: hidden;
                font-size:medium; 

            }
            a{
                text-align: center;
                color: aliceblue;
                font-size: x-large;
                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            }
            a:hover{
                
                text-decoration-style:solid;
                font-style: oblique;
                font-size: x-large;
                color:darkgreen;
            }
           
        </style>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Desk Flora Dash Board</title>
    </head>
    <body>
        <nav>
        <p>
        <a href="individuos.html"> [Cadastrar Novo] </a><br>
        <a href="dashboard.php">  [ ATUALIZAR PAGINA ] </a><br>
        <a href="ListarInventarios.php"> Sair/Salvar </a><br>
        <a href="gerar_planilha.php"> [Gerar Planilha] </a>
        <hr>
        </p>
        </nav>
        <?php
          
        
        $pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
		$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
        $qnt_result_pg = 2;
        $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;

        $result_ind= "SELECT * FROM individuos LIMIT $inicio, $qnt_result_pg" ;
        $result_indi= mysqli_query($conn, $result_ind);
        
        echo " <h1><BR> LOGADO  : [ ".$_SESSION['usuarioNome']." ] <br> ID : ".$_SESSION['usuarioid']."</h1><hr>";
        if(empty($_SESSION['usuarioNome'])){
                    $_SESSION['loginErro'] = "Usuario  ou Senha Invalido";
                    unset($_SESSION['loginErro']);
                    header("Location: Login.php");
        }else{
                
            
            while($row_ind = mysqli_fetch_assoc($result_indi)){
                echo "<h1>ID :".$row_ind['id']."<br> </h1>";
                echo "<p> Nome Popular : ".$row_ind['nomepopular']."<br>";
                echo " Nome Cientifico : ".$row_ind['nomecientifico']."<br>";
                echo " Altura Total  : ".$row_ind['altura']." (mts) <br>";
                echo " Diametro (CAP) : ".$row_ind['diametro']." (cm) </p><hr>";
               $cont ++;
                           
            }

        $result_pg = "SELECT COUNT(id) AS num_result FROM individuos";
		$resultado_pg = mysqli_query($conn, $result_pg);
		$row_pg = mysqli_fetch_assoc($resultado_pg);
        echo "<h1> Contagem na Pagina : [ ".$cont." ] Registros. Com um total de :".$row_pg['num_result']." Registros</h1>"; 
         
        }
        ?>
        
    </body>
    </html>