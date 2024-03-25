<?php
    include("funcao.php");

        $nota01 = $_GET['nota1'];
        $nota02 = $_GET['nota2'];
        $nota03 = $_GET['nota3'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Media do Aluno</title>
</head>
<body>
    <?php
        $media = mostrarMedia(calcularMedia($nota01, $nota02, $nota03));
    ?>
    <br>
    <a href="formulario-03.html">Voltar</a>
</body>
</html>