<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registro</title>
</head>
<body>
    <h1>Faça seu registro!</h1>

    <!-- Formulário HTML -->
<form action="" method="post">
  <label>Nome: </label><br>
  <input type="text" name="nome"><br>
  <label>Senha: </label><br>
  <input type="text" name="senha"><br><br>
  <input type="submit" value="Registrar">
</form>

<?php

//variaveis da conexão do banco dados

include "conexao.php";


// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Coleta os dados do formulário
  $nome = $_POST["nome"];
  $senha = $_POST["senha"];

  // Insere os dados no banco de dados
  $sql = "INSERT INTO registrar (Nome, Senha) VALUES ('$nome', '$senha')";
  if ($conn->query($sql) === TRUE) {
    echo "Dados inseridos com sucesso"."<br>";
  } else {
    echo "Erro ao inserir dados: " . $conn->error;
  }
}
$conn->close();
?>


   <br> <a href="log.php">Já tem um registro? Entre por aqui!</a>
    
</body>
</html>