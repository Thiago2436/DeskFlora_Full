
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="Sstilo.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de inventario</title>
</head>
<body>
    
    <form  method="post" action="Cadinventario2.php">
        <h3> CADASTRAR INVENTARIO </h3>
        <label for="Cidade">Cidade</label><br>
        <input type="text" name="Cidade" id="Cidade" required><br>
        <label for="Estado">Estado</label><br>
        <input type="text" name="Estado" id="Estado" require><br>
        <label for="Bairro">Bairro</label><br>
        <input type="text" name="Bairro" id="Bairro" require><br>
        <label for="Rua">Rua</label><br>
        <input type="text" name="Rua" id="Rua" require><br>
        <label for="Numero">Numero(Opicional)</label><br>
        <input type="number" name="Numero" id="Numero" ><br>
        <label for="Complemento">Complemento(Opcional)</label><br>
        <input type="text" name="Complemento" id="Complemento" ><br>
        <input type="submit" value="Registrar"><br><br>
    </form>
   
</body>
</html>
