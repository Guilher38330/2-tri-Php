<?php
include('funcao.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pessoas maiores de idade</title>
</head>
<body>
<?php
    $conexao = conectar();
    listarPessoasMaioresIdade($conexao);
    $conexao = null;
    ?>
    <br>
    <a href="paginaIndex.html">Voltar para INDEX</a>
</body>
</html>