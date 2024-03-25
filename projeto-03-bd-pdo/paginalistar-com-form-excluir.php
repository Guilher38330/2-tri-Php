<?php
include("funcao.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        
        form {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            text-align: center;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
        }
        
        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
        button {
            padding: 8px 12px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<?php
    $a=conectar();
    listarPessoas($a);
    $a=null;
    ?>
    <br>
    <form action="paginaExcluir.php" method="GET">
        <h1>Excluir ID Pessoa</h1>
        <label for="idpessoa">ID Pessoa:</label>
        <input type="number" id="id" name="id">
        <button type="submit">Excluir</button>
    </form>
    <br>
  <a href="paginaIndex.html">Voltar para INDEX</a>
</body>
</html>