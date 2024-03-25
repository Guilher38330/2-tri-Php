<?php
include('funcao.php');
$nome = $_GET['nome'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nome Pesquisado</title>
</head>
<body>
<?php
    $conexao = conectar();
    listarPorNomePesquisado($conexao, $nome);
    $conexao = null;
    ?>
    <br>
    <a href="paginaIndex.html">Voltar para INDEX</a>
</body>
</html>