<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 04</title>
</head>

<body>

    <h1>Exercicio formulário</h1>
    <hr>

    <form autocomplete="off" action="" method="post">
        <p>
            <label for="nome">Nome do produto:</label>
            <input required type="text" name="nome" id="nome">
        </p>
        <?php
        $fabricantes = ["Apple", "Dell", "hp", "Lenovo"];
        ?>


        <p>
            <label for="fabricantes">Fabricantes:</label>
            <select name="fabricantes" id="fabricante">
                <option value=""></option>
                <?php foreach ($fabricantes as $fabricante) { ?>
                    <option> <?= $fabricante ?> </option>
                <?php } ?>

            </select>
        </p>

        <p>
            <label for="preco">Preço:</label>
            <input type="number" name="preco" id="preco" min="100" max="10000" step="0.01" required>
        </p>

        <p>
            <label for="mensagem">Descrição:</label><br>
            <textarea name="mensagem" id="mensagem" cols="30" rows="6"></textarea>
        </p>

        <button type="submit" name="enviar">Enviar dados</button>
    </form>

</body>

</html>