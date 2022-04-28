<?php
        session_start();
	
        unset(
            $_SESSION['usuarioid'],
            $_SESSION['usuarioNome'],
            $_SESSION['senhaUsuario']
        );
        
      
        header("Location: index.html");


?>