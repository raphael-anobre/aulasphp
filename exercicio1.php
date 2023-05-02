<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <h1>Exercício 1</h1>
    <hr>

    <?php
const PESSOA = "Raphael"; 
$curso = "Programador Web";
$cargahoraria = 500;
$limitefaltas = $cargahoraria / 4;

    ?>



<p>O <b><?=PESSOA?></b> faz o curso de 
<b><?=$curso?></b> com carga horária de
<b><?=$cargahoraria?> horas</b>, com limite de faltas de
<b><?=$limitefaltas?> horas.</b> 
</p>











</body>
</html>