<?php
    session_start();
    include_once('conex.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerar Planilha</title>
</head>
<body>
     
        <?php
            //arquivo exportado
             $arquivo = 'inventario.xls';
            $html='';
            $html.='<table>';
            $html.='<tr>';
            $html.='<td colspan = "5">'."<b>  Inventario Do [ </b>" .$_SESSION['usuarioNome']."<b> ]</b>".'</td>';
            $html.='</tr>';

            // Campos da tabela
            $html .= '<tr>';
            $html .= '<td><b>ID</b></td>';
            $html .= '<td><b>Nome Popular</b></td>';
            $html .= '<td><b>Nome Cientifico</b></td>';
            $html .= '<td><b>Altura</b></td>';
            $html .= '<td><b>Diâmetro</b></td>';
            $html .= '</tr>';
            

            //select na tabela
            $inventario_result = "SELECT * FROM individuos";
            $inventario_result = mysqli_query($conn, $inventario_result);
                while($row_individuos = mysqli_fetch_assoc($inventario_result)){
                    $html.='<tr>';
                    $html.='<td>'.$row_individuos['id'].'</td>';
                    $html.='<td>'.$row_individuos['nomepopular'].'</td>';
                    $html.='<td>'.$row_individuos['nomecientifico'].'</td>';
                    $html.='<td>'.$row_individuos['altura'].'</td>';
                    $html.='<td>'.$row_individuos['diametro'].'</td>';
                    $html.='</tr>';
                    
                }
                
            $html .= '</table>';
           
            //Configurações header para forçar o download
                header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
                header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
                header ("Cache-Control: no-cache, must-revalidate");
                header ("Pragma: no-cache");
                header ("Content-type: application/x-msexcel");
                header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
                header ("Content-Description: PHP Generated Data" );
		// Envia o conteúdo do arquivo
		echo $html;
		exit; 
       
        ?>
   
    <footer></footer>
    
</body>
</html>