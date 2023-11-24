<?php
require 'function.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form class="" action="" method="POST">
        Name
        <input type="text" name="name" value=""> <br>
        Gender
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female <br>
        Country
        <select class="" name="country">
            <option value="Brasil">Brasil</option>
            <option value="USA">USA</option>
            <option value="Argentina">Argentina</option>
        </select> <br>
        <button type="submit" name="submit" value="add">Add</button>
    </form>
    <br>
    <a href="index.php">Home</a>
</body>
</html>

<!-- 
Diferença de include pra require:
 include:

    Se o arquivo especificado no include não for encontrado, o PHP emitirá um aviso (warning) e continuará a execução do script.
    O script continuará sendo executado mesmo se o include falhar.
    Pode ser usado para incluir arquivos não essenciais.
    
  require:

    Se o arquivo especificado no require não for encontrado, o PHP emitirá um erro fatal e interromperá a execução do script.
    O script não continuará a ser executado se o require falhar.
    Geralmente usado para incluir arquivos essenciais para o funcionamento do script.  

-->