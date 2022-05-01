

<?php
    session_start();
    include_once("conex.php");

    $Cidade = $_POST['Cidade'];
    $Estado = $_POST['Estado'];
    $Bairro = $_POST['Bairro'];
    $Rua = $_POST['Rua'];
    $Numero = $_POST['Numero'];
    $Complemento = $_POST['Complemento'];

    if(!empty($Cidade))
    {
        $existe = mysqli_query($conn,"SELECT * FROM inventarios WHERE Cidade = '$Cidade'")
        or die ("Indeferido não conectou");
             
                    mysqli_query($conn,"INSERT INTO inventarios (Cidade, Estado, Bairro, Rua, Numero, Complemento) VALUES ('$Cidade', '$Estado', '$Bairro', '$Rua', '$Numero', '$Complemento')")
                    or die ("Nao inseriu");
                    echo (' Feito <br> <a href ="home.php"> Sair </a>');

                }
            
                echo (' Feito <br> <a href ="home.php"> Sair </a>');     
    }


?>