<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];


    include "conexao.php";


    $sql = "SELECT * FROM funcionario
    WHERE usuario= '$usuario'
    AND senha='$senha'";


    $resultado = mysqli_query($con, $sql);


    if (mysqli_num_rows($resultado) > 0) {
        echo "Liberado";
        header('location: index.html');
    } else
    {
        echo "Usuário ou senha inválidos";
    }
}


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Login</h1>

   <form action="funcionario.php" method="post">
      <label>usuario</label>
      <input type="text" name="usuario" required><br>
      <br>
      <label>senha</label><br>
      <input id=senha type="password" name="senha" required><br><br>

      <button type="submit">cadastrar</button><br><br>
   </form>
</body>
</html>