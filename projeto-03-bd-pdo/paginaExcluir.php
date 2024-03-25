<?php
include("funcao.php");
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir</title>
</head>
<body>
<?php
    $a=conectar();
    $retornodafuncaoexcluirpessoa=excluirPessoa($a, $id);
    if($retornodafuncaoexcluirpessoa == true){
        echo "Registro excluido com sucesso!!!!";
    }else{
    echo "Erro ao excluir informações!!!!!";
    }
    echo"<br>";
    $a=null;
    ?>
    <br>
    <a href="paginaIndex.html">Voltar para INDEX</a>
</body>
</html>