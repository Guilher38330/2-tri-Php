<?php
    include("funcao.php");
    $base = $_GET['base'];
    $altura = $_GET['altura'];
    $area = areaTrianculo($base, $altura);
    $perimetro = perimetroTriangulo($base, $altura);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area e Perimetro do Triangulko</title>
</head>
<body>
    <?php
    mostrarAreaTriangulo($base, $altura, $area);
    ?><br>
    <?php
    mostrarPerimetroTriangulo($base, $altura, $perimetro);
    ?>
    <br>
    <a href="formasgeometricas.html">Voltar para pagina principal</a>
</body>
</html>