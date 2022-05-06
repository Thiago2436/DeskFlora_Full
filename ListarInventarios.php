<?php
    session_start();
    include_once("conex.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="Sstilo.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista De Inventarios</title>
</head>
<body>
   <header>
        <h1> Inventarios cadastrados</h1>
        <h1> <a href="home.php">Voltar</a>
   </header>
      <main>
        <?php
            $result_inv= "SELECT * FROM Inventarios" ;
            $result_invi= mysqli_query($conn, $result_inv);
            
            echo " <h1>LOGADO  : [ ".$_SESSION['usuarioNome']." ] <br> ID : ".$_SESSION['usuarioid']."</h1><hr>";
            if(empty($_SESSION['usuarioNome'])){
                        $_SESSION['loginErro'] = "Usuario  ou Senha Invalido";
                        unset($_SESSION['loginErro']);
                        header("Location: Login.php");
            }else{
                    
                
                while($row_inv = mysqli_fetch_assoc($result_invi)){
                    echo "<h1>ID :".$row_inv['id']."<br> </h1>";
                    echo "<h1>Cidade : ".$row_inv['Cidade']."</h1><br>";
                    echo " <h2> Estado : ".$row_inv['Estado']."</h2><br>";
                    echo " <h2>Bairro  : ".$row_inv['Bairro']." (Locate)</h2> <br>";
                    echo " <h2>Rua : ".$row_inv['Rua']." (Locate) </h2><hr>";
                   $cont ++;
                   echo '<h1><a href="dashboard.php">Abrir inventario </a></h1>';     
                }
                echo "<h1> Contagem Total : [ ".$cont." ] Registros</h1>"; 
            }
            ?>
        
        
        
   </main>
   <footer>

   </footer> 
</body>
</html>