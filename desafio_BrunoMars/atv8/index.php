<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "style.css">
    <title>Ingresso Bruno Mars</title>
</head>
<body>
    <div class="fixed">

<form method="POST">
<h1>Nome</h1>
    <input type="text" name="nome" placeholder="Digite seu nome" require>


<h1>Idade</h1>

    <input type="text" name="idade" placeholder="Digite sua idade" require>


<h1>Tipo de ingresso</h1>

<select name="ingresso">
    <option value="VIP">VIP</option>
    <option value="Regular">Regular</option>
    <option value="Basico">Básico</option>
</select>
<button type="submit">Enviar</button>
</form>

<?php
    if ($_SERVER ['REQUEST_METHOD']==
    'POST'){

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $ingresso= $_POST['ingresso'];

        echo "<p>Bem-vindo $nome</p>";

        if ($idade < 18){
            echo "<p>Ingresso não permitido para menores de idade</p>";
        }
    
    else{
        switch ($ingresso){

            case 'VIP':
                $preco = 100;
                $tipoingresso = "VIP";
            break;
            case 'Regular':
                $preco = 50;
                $tipoingresso = "Regular";
            break;
            case 'Basico':
                $preco = 20;
                $tipoingresso = "Básico";
            break;
            default:
                echo "Opção inválida" ;
                exit;
            }
            echo "<p> Você escolheu: $tipoingresso</p>";
            echo "Preço : " . number_format($preco, 2, ',');
        }
    }  
    
?>
</div>
</body>
</html>