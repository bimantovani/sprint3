<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="est.css">
  <title>Consulta de login</title>
  
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
        <th>Nome</th>
        <th>Idade</th>
        <th>CPF</th>
        <th>Email</th>
        <th>Senha</th>
        
      </tr>
    </thead>
    <tbody>

        
      <?php
      include "conexao.php";

      $sql = "SELECT * FROM cliente";
    
      $dados = mysqli_query($con, $sql);

     while ($linha = mysqli_fetch_array($dados)) {
        $nome = $linha['nome'];
        $idade = $linha['idade'];
        $cpf = $linha['cpf'];
        $email = $linha['email'];
        $senha = $linha['senha'];
        
       echo "<tr>
                <th>$nome</th>
                <th>$idade</th>
                <th>$cpf</th>
                <th>$email</th>
                <th>$senha</th>
                
            </tr>";
     }

     ?>


    </tbody>
  </table>
<br>
<a class="botao" href="index.html">Voltar</a>

</html>
