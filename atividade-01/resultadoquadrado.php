<?php
    include("funcao.php");
    $lado = $_GET['lado'];
    $area = calcularAreaQuadrado($lado);
    $perimetro = perimetroQuadrado($lado);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area e Perimetro do quadrado</title>
</head>
<body>
    <?php
    mostrarAreaQuadrado($lado, $area );
    ?><br>
    <?php
    mostrarPerimetroQuadrado($lado, $perimetro);
    ?>
    <br>
    <a href="formasgeometricas.html">Voltar para pagina principal</a>
</body>
</html>