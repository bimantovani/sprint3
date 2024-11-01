<?php

$nome = $_POST['nome'];
$devolucao = $_POST['devolucao'];
$id_cliente = $_POST['id_cliente'];
$data_emprestimo= $_POST['data_emprestimo'];
$id_funcionario = $_POST['id_funcionario'];
$isbn = $_POST['isbn'];



include "conexao.php";
      
      $sql = "INSERT INTO `emprestimo`(`isbn`,`nome`, `devolucao`, `id_cliente`, `data_emprestimo`,`id_funcionario`) 
                              VALUES ('$isbn','$nome','$devolucao','$id_cliente', '$data_emprestimo', '$id_funcionario')";
      if (mysqli_query($con, $sql)) {
         echo "Emprestimo realizado com sucesso!";
         echo "<br><a href='index.html'>Voltar</a>";
      }
      else{
         echo "Erro no emprestimo!";
         echo "<br><a href='index.html'>Voltar</a>";
      }
?>