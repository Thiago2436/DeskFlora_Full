<?php

    session_start();
    include_once("conex.php");

?>
<!DOCTYPE html>
<html lang="Pt-Br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Sstilo.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Inventario</title>
</head>
<body>
    <header>
        <h1> CADASTRO DE INVENTARIO</h1>
    </header>
   <nav> 

<?php
   
    $Cidade = $_POST['Cidade'];
    $Estado = $_POST['Estado'];
    $Bairro = $_POST['Bairro'];
    $Rua = $_POST['Rua'];
    $Numero = $_POST['Numero'];
    $Complemento = $_POST['Complemento'];

    $lista = mysqli_query($conn,"SELECT * FROM individuos")
                or die ( " invalida consulta");
            
                if(!empty($Cidade))
                {
                    mysqli_query($conn, "INSERT INTO Inventarios (Cidade, Estado, Bairro, Rua, Numero, Complemento) 
                    VALUES ('$Cidade','$Estado','$Bairro','$Rua','$Numero','$Complemento')")
                        or die ("Não inseriu ");
                }
           
echo "Cidade : ". $Cidade."<br>";
echo "Estado : ". $Estado."<br>";  
echo "Bairro : ". $Bairro."<br>";
?>
</nav>
<h1>Cadastrado com sucesso ! </h1>
<a href="home.php">Voltar</a>

</body>
</html>