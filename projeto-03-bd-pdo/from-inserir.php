<?php
    include ('funcao.php');
    $idpessoa = $_GET['idpessoa'];
    $nome = $_GET['nome'];
    $sobrenome = $_GET['sobrenome'];
    $rua = $_GET['rua'];
    $numero = $_GET['numero'];
    $idade = $_GET['idade'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir</title>
</head>
<body>
    <?php
    $conexao = conectar();
    inserirPessoa($conexao, $nome, $sobrenome, $rua, $numero, $idade);
    $conexao = null;
    ?>
    <br>
    <a href="paginaIndex.html">Voltar para INDEX</a>
</body>
</html>
