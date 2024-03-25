<?php
$variavelPhpParaGardarONome = $_GET['nomedigitado'];

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Conhecendo PHP</title>
</head>

<body>
    <h1>Pegar os dados dos Formulários</h1>
<?php
//comentario php: posso misturar com dados html quantas vesez quizer.
    echo("Olá PHP");
    echo("O nome digitado no formulário foi: ".$variavelPhpParaGardarONome);
    
?>
<br>
<?php
    echo("Olá PHP no final da página")

?>
</body>

</html>
