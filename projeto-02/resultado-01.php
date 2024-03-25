<?php
    include("funcao.php");
//pegar os valores do formulario
        $numero01 = $_GET['Valor01'];
        $numero02 = $_GET['Valor02'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apresentando o resultado do exercicio 01</title>
</head>
<body>
    <?php
        
        //etapa 02 usar a funcao
        $valorRetornadoDaFuncao = retornarMaiorValor($numero01, $numero02);

        echo("Maior valor : ".$valorRetornadoDaFuncao. "<br>");

        /*segunda chamada da funcao
        $valorRetornadoDaFuncao = retornarMaiorValor(5,15);
        echo("Maior valor : ".$valorRetornadoDaFuncao);*/
    ?>
    <a href="formulario-01.html">Voltar</a>
</body>
</html>