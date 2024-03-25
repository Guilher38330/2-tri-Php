<?php
    include("funcao.php");
    $raio = $_GET['raio'];
    $area = areaCirculo($raio);
    $perimetro = perimetroCirculo($raio);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area e Perimetro do Circulo</title>
</head>
<body>
    <?php
    mostrarAreaCirculo($raio, $area);
    ?><br>
    <?php
    mostrarPerimetroCirculo($raio, $perimetro);
    ?>
    <br>
    <a href="formasgeometricas.html">Voltar para pagina principal</a>
</body>
</html>