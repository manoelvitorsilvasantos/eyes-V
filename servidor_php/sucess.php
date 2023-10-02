<?php 
session_start();

// Verifica se a sessão está vazia (usuário não autenticado)
if(empty($_SESSION)){
    header("location: index.php");
    exit; // Encerra a execução do script para evitar processamento adicional.
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro - Eyes-V</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
</head>
<body>
    <div class="link">
        <a href="dashboard.php">Voltar ao Menu.</a>
    </div>
    <div class="form">
        <h3>SALVA COM SUCESSO.</h3>
        <p>Imagem foi salva com sucesso.</p>
    </div>
</body>
</html>