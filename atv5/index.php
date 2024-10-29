<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade para Dirigir</title>
</head>
<body>
<h1>Verifique se você pode dirigir</h1>

<form method="POST">
    <label>Digite sua idade:</label>
    <input type="text" name="idade" placeholder="Digite sua idade" require>
    <button type="submit">Verificar</button>
</form>

<?php

    $idade = $_POST['idade'];

    if ($idade  >=  18){

        echo "<p> Você pode dirigir </p>";

    } else {

        echo "<p> Você não pode dirigir </p>";

    }

?>
</body>
</html>