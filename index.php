<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Agenda</title>
</head>
<body>
    <h1>Registros Feitos</h1>
<?php

include "conexao.php";


$sql = "SELECT Nome, Senha FROM registrar";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    while ($linha = $resultado->fetch_assoc()) {
        echo $linha["Nome"] . " - " . $linha["Senha"] . "<br>";
    }
} else {
    echo "Nenhum registro encontrado.";
}

$conn->close();
?>

<br><a href="log.php">Já tem um cadastro? Entre por aqui!</a>
<br><br><a href="registrar.php">Não tem um cadastro? Registre-se agora!</a>
    
</body>
</html>
