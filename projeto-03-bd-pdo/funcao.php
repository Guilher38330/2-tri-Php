<?php
    function conectar ( ) : object { 
    $usuario = "root";
    $senha = "";
    $conexao = new PDO("mysql:host=localhost;dbname=inf3am",$usuario, $senha);
    return $conexao;
    }

    function listarPessoas (object $conexao) : void { 
        $stmt = $conexao->prepare("select * from pessoas");
        $stmt->execute();
        $arrayDadosPessoas = $stmt->fetchAll(PDO::FETCH_OBJ);
        foreach($arrayDadosPessoas as $pessoa){
          echo $pessoa->idPessoa;
          echo"<br>";
            echo $pessoa->nome;
            echo"<br>";
            echo $pessoa->sobreNome;
            echo"<br>";
            echo $pessoa->rua;
            echo"<br>";
            echo $pessoa->numero;
            echo"<br>";
            echo $pessoa->idade;
            echo"<br>";
            echo"<br>";
        }
        return;
    }

    function excluirPessoa (object $conexao, int $id ) : bool { 
        $sql = $sql = "DELETE FROM `pessoas` WHERE `pessoas`.`idPessoa` = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(1,$id,PDO::PARAM_INT);
    
        if($stmt->execute()){
            return true;
            } else {
            return false;
            }
    }

    function inserirPessoa(object $conexao, string $nome, string $sobrenome, string $rua, int $numero, int $idade): bool {
      $sql = "INSERT INTO pessoas (nome, sobrenome, rua, numero, idade) VALUES (?, ?, ?, ?, ?)";
      $stmt = $conexao->prepare($sql);
      $stmt->bindParam(1,$nome,PDO::PARAM_STR);
      $stmt->bindParam(2,$sobrenome,PDO::PARAM_STR);
      $stmt->bindParam(3,$rua,PDO::PARAM_STR);
      $stmt->bindParam(4,$numero,PDO::PARAM_INT);
      $stmt->bindParam(5,$idade,PDO::PARAM_INT);

      if($stmt->execute()){
        echo "Registro com sucesso!!!!";
        return true;
        } else {
        echo "Erro ao informações!!!!!";
        return false;
        }
        echo"<br>Linhas afetadas:".$stmt->rowCount();
  }
  
  function listarPorNomePesquisado(PDO $conexao, string $nome): void { 
    $sql = "SELECT * FROM `pessoas` WHERE `nome` LIKE ?";
    $stmt = $conexao->prepare($sql);
  
    $stmt->execute(["%$nome%"]); // O valor de $nome é inserido no array como "%$nome%"
    //O caractere % é um curinga que representa qualquer sequência de caracteres, permitindo que nomes semelhantes sejam encontrados
    $arrayDadosPessoas = $stmt->fetchAll(PDO::FETCH_OBJ);
  
    foreach($arrayDadosPessoas as $pessoa) {
      echo $pessoa->idPessoa;
      echo"<br>";
        echo $pessoa->nome;
        echo"<br>";
        echo $pessoa->sobreNome;
        echo"<br>";
        echo $pessoa->rua;
        echo"<br>";
        echo $pessoa->numero;
        echo"<br>";
        echo $pessoa->idade;
        echo"<br>";
        echo"<br>";
    }
  }

  function listarPessoasMaioresIdade (object $conexao) : void { 
    $sql = "SELECT *  FROM `pessoas` WHERE `idade` >= 18;";
    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    $arrayIdadePessoas = $stmt->fetchAll(PDO::FETCH_OBJ);
    foreach($arrayIdadePessoas as $pessoa){
      echo $pessoa->idPessoa;
          echo"<br>";
            echo $pessoa->nome;
            echo"<br>";
            echo $pessoa->sobreNome;
            echo"<br>";
            echo $pessoa->rua;
            echo"<br>";
            echo $pessoa->numero;
            echo"<br>";
            echo $pessoa->idade;
            echo"<br>";
            echo"<br>";
    }
  }

  
