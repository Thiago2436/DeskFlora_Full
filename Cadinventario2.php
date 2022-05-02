
<!DOCTYPE html>
<html lang="Pt-Br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Sstilo.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1> CADASTRO DE INVENTARIO</h1>
    </header>
   <nav> 

<?php
    session_start();
    include_once("conex.php");

    $Cidade = $_POST['Cidade'];
    $Estado = $_POST['Estado'];
    $Bairro = $_POST['Bairro'];
    $Rua = $_POST['Rua'];
    $Numero = $_POST['Numero'];
    $Complemento = $_POST['Complemento'];
echo "Cidade : ". $Cidade."<br>";
echo "Estado : ". $Estado."<br>";  
echo "Bairro : ". $Bairro."<br>";


?>
</nav>
</body>
</html>