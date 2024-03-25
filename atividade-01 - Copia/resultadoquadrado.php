<?php
    include("funcao.php")
    
    
    
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
        $area = mostrarAreaQuadrado($lado, $area); 
        
        $perimetro = mostrarPerimetroQuadrado($lado, $perimetro);
    ?>
</body>
</html>