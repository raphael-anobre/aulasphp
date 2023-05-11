<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercico 04 dados</title>
</head>

<body>

    <h1>Exercicio dados</h1>
    <hr>

    <?php

    $nome = $_POST['nome'];
    $fabricantes = $_POST['fabricantes'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];

    ?>

    <h2>Recebimento de dados</h2>
    <p>Produto: <?=$produto?></p>
    <p>Fabricantes: <?=$fabricantes?></p>
    <p>Preço: <?=$preco?></p>
    <p>Descrição: <?=$descricao?></p>





</body>

</html>