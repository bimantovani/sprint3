<?php

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$senha = $_POST['senha'];

include "conexao.php";
      
      $sql = "INSERT INTO `cliente`(`nome`, `idade`, `cpf`, `email`, `senha`) 
                              VALUES ('$nome','$idade','$cpf','$email','$senha')";
      if (mysqli_query($con, $sql)) {
         echo "Cliente cadastrado com sucesso!";
         echo "<br><a href='index.html'>Voltar</a>";
      }
      else{
         echo "Erro no cadastro!";
         echo "<br><a href='index.html'>Voltar</a>";
      }

