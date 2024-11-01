<?php

$isbn = $_POST['isbn'];
$nome = $_POST['nome'];
$ano_publicacao = $_POST['ano_publicacao'];
$autor = $_POST['autor'];
$classificacao = $_POST['classificacao'];
$estoque = $_POST['estoque'];
$editora = $_POST['editora'];
$genero = $_POST['genero'];

include "conexao.php";
      
      $sql = "INSERT INTO `cadastro`(`isbn`, `nome`, `ano_publicacao`, `autor`, `classificacao`, `estoque`, `editora`, `genero`) 
                              VALUES ('$isbn','$nome','$ano_publicacao','$autor','$classificacao','$estoque','$editora','$genero')";
      if (mysqli_query($con, $sql)) {
         echo "Livro cadastrado com sucesso!";
         echo "<br><a href='index.html'>Voltar</a>";
      }
      else{
         echo "Erro no cadastro!";
         echo "<br><a href='index.html'>Voltar</a>";
      }