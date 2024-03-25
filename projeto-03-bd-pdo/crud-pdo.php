<?php

    include "funcao.php";
    $retornoDaConexao = conectar();

    // 2 listar
   
    listarPessoas($retornoDaConexao);

    //3 inserir
    $variavelComNome = "Agata";
    $variavelComRua = "Marechal Deodoro";
    $stmt = $conexao->prepare("insert into aluno(nome,rua) values(?,?)");
    $stmt->bindParam(1,$variavelComNome,PDO::PARAM_STR);
    $stmt->bindParam(2,$variavelComRua,PDO::PARAM_STR);

    if($stmt->execute()){
    echo "Registro gravado com sucesso!!!!";
    } else {
    echo "Erro ao gravar informações!!!!!";
    }
    echo"<br>Linhas afetadas:".$stmt->rowCount();
 
    // 4 excluir
    $auxId = 34;
    $sql = "delete from aluno where idaluno = ?";
    $stmt = $retornoDaConexao->prepare($sql);
    $stmt->bindParam(1,$auxId,PDO::PARAM_INT);

    if($stmt->execute()){
        echo "Registro excluido com sucesso!!!!";
        } else {
        echo "Erro ao excluir informações!!!!!";
        }
        echo"<br>Linhas afetadas:".$stmt->rowCount();

    // 6 fechar o statement
    $stmt = null;
    // 7 fecha o objeto conexao
    $conexao = null;
?>