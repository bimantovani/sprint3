<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/est.css">
  <title>Consulta de livros</title>
  
  <style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    table, th, td {
        border: 1px solid;
    }
  </style>
</head>

<body>

  <h1>Consulta</h1>
  <br>

  <table>
    <thead>
      <tr>
        <th>isbn</th>
        <th>nome</th>
        <th>ano_publicacao</th>
        <th>autor</th>
        <th>classificacao</th>
        <th>estoque</th>
        <th>editora</th>
        <th>genero</th>
        
      </tr>
    </thead>
    <tbody>

        
      <?php
      include "conexao.php";

      $sql = "SELECT * FROM cadastro";
    
      $dados = mysqli_query($con, $sql);

     while ($linha = mysqli_fetch_array($dados)) {
        $isbn = $linha['isbn'];
        $nome = $linha['nome'];
        $ano_publicacao = $linha['ano_publicacao'];
        $autor = $linha['autor'];
        $classificacao = $linha['classificacao'];
        $estoque = $linha['estoque'];
        $editora = $linha['editora'];
        $genero = $linha['genero'];
        
       echo "<tr>
                <th>$isbn</th>
                <th>$nome</th>
                <th>$ano_publicacao</th>
                <th>$autor</th>
                <th>$classificacao</th>
                 <th>$estoque</th>
                    <th>$editora</th>
                       <th>$genero</th>
                
            </tr>";
     }

     ?>


    </tbody>
  </table>
<br>
<a class="botao" href="index.html">Voltar</a>

</html>