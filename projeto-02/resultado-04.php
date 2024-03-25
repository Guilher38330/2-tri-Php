<?php
    include("funcao.php");

    $salarioAtual = $_GET["salarioAtual"];
    $numReajustes = $_GET["numReajustes"];

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Salario e reajustes</title>
</head>
<body>
    <?php
          $salarioReajustado = reajustarSalario($salarioAtual, $numReajustes);
          mostrarSalario($salarioReajustado);
    ?>
    <br>
    <a href="formulario-04.html">Voltar</a>
</body>
</html>