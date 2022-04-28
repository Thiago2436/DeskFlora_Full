
    <?php
    session_start();
            
        $conn = mysqli_connect('localhost',"root","123456789",'DeskFlora',)
            or die (" Não conectou ");
            if((isset($_POST['nome'])) && (isset($_POST['senha']))){
                
                $nome = mysqli_real_escape_string($conn, $_POST['nome']);
                $senha = mysqli_real_escape_string($conn,$_POST['senha']);
                
                $sql = "SELECT * FROM usuario WHERE nome = '$nome' && senha = '$senha' ";
                $result = mysqli_query($conn, $sql);
                $resultado = mysqli_fetch_assoc($result);
                if(empty($resultado))
                {
                    $_SESSION['loginErro'] = "Usuário ou senha Inválido";
                    header("Location: Login.php");
                } elseif(isset($resultado)){
                    $_SESSION['senhaUsuario'] = $resultado['senha'];
                    $_SESSION['usuarioid'] = $resultado['id'];
                    $_SESSION['usuarioNome']= $resultado['nome'];
                    $senha = md5($senha); // criptografia.
                    header("Location: dashboard.php");

                }else{
                    $_SESSION['loginErro'] = "Usuário ou senha Inválido";
                    header("Location: Login.php");
                }

                }else{
                    $_SESSION['loginErro'] = "Usuário ou senha Inválido";
			            header("Location: Login.php");
                }
            
           /* if(!empty($nome)){
            

            $nomexiste = mysqli_query($con,"SELECT * FROM usuario  WHERE nome ='$nome'") or die(" indeferida ");
                if(mysqli_fetch_assoc($nomexiste)){
                    $senhaexiste  = mysqli_query($con,"SELECT * FROM usuario WHERE senha='$senha'") 
                    or die("Indeferido");
                    echo(' Nome ok '.$nome);
                    if(mysqli_fetch_assoc($senhaexiste)){
                        
                        echo(' Senha ok ');
                        include("dashboard.php");
                        //header("Location: dashboard.php");
                       
                    }else{
                        echo ('<br> <h1> Senha invalida </h1>');
                    }
                }else{
                    echo ('<br> <h1> Nome invalido </h1>');
                }
            }*/
    ?>
    