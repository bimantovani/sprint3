<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="est.css">
  <title>Consulta de emprestimo</title>
  
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
        <th>Devolucao</th>
        <th>id_cliente</th>
        <th>id_emprestimo</th>
        <th>data_emprestimo</th>
        <th>id_funcionario</th>
        
      </tr>
    </thead>
    <tbody>

        
      <?php
      include "conexao.php";

      $sql = "SELECT * FROM emprestimo";
    
      $dados = mysqli_query($con, $sql);

     while ($linha = mysqli_fetch_array($dados)) {
        $isbn = $linha['isbn'];
        $nome = $linha['nome'];
        $devolucao = $linha['devolucao'];
        $id_cliente = $linha['id_cliente'];
        $id_emprestimo = $linha['id_emprestimo'];
        $data_emprestimo = $linha['data_emprestimo'];
        $id_funcionario = $linha['id_funcionario'];
        
       echo "<tr>
                <th>$isbn</th>
                <th>$nome</th>
                <th>$devolucao</th>
                <th>$id_cliente</th>
                <th>$id_emprestimo</th>
                <th>$data_emprestimo</th>
                <th>$id_funcionario</th>
            </tr>";
     }

     ?>


    </tbody>
  </table>
<br>
<a class="botao" href="index.html">Voltar</a>

</html>
