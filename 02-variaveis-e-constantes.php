<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes</title>
</head>

<body>

    <h1>Usando variáveis e constantes</h1>
    <hr>

    <h2>Variáveis</h2>

    <?php
    // Variáveis 
    $curso = "Programador Web";
    $ano = 2023;
    $preco = 1278.75;
    $area = 'Back-End';

    // Saída de dados
    echo "<h2>Exemplos de saídas usando variáveis</h2>";
    echo '<p>$curso</p>'; // trata como texto
    echo "<p>$curso</P>"; // interpolação

    /* Ao usar variáveis dentro
de srings/textos, é necessária
as aspas duplas "" para que o 
recurso seja interpretando. */

    // Saída usando concatenação (ponto .)
    echo "<p><i>" . $curso . "</i></P>";

    ?>

    <!-- Saída ABREVIADA/SIMPLIFICADA
usando "shorthand tags" do PHP -->
    <h2>Saída usando versão simplificada do PHP</h2>

    <!-- Estamos em 2023 estudando Back-End -->
    <p>Estamos em <?= $ano ?> estudando <?= $area ?> </p>

    <!-- USANDP PHP SINTAXE TRADICIONAL
(mais verbosa e suscetível a erros) -->
    <?php
    echo "<p>Estamos em $ano estudando $area</p>";
    ?>

    <h2>Constantes</h2>
    <?php
    // sintaxe tradicional
    define("AUTOR", "Tiago Bezerra dos Santos");
    define("JUROS", 10);

    // sintaxe mais recente
    const EMPRESA = "ABC Tecnologia";
    ?>
    <p>Autor do site: <?= AUTOR ?></p>
    <p>Taxa de juros: <?= JUROS ?>% em <?= $ano ?> </p>
    <p>Prestador de serviços: <?= EMPRESA ?></p>



</body>

</html>