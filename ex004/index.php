<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Maioridade</title>
    
</head>
<body>

<form method="POST">
    <h2>Você quer saber se já chegou na maioridade?<br>Verifique abaixo:</h2>
    <label>Digite a sua idade:</label><br>
    <input type="number" name="idade" step="0" required><br>
    <input type="submit" value="Verificar"> 
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idade = $_POST['idade'];
$falta = 18 - $idade;
    if ($idade >= 18) {
        echo "<p>É isso ai! Você é maior de idade!</p>";
    } else {
        echo "<p>Ops! Você ainda tem <strong>$falta</strong> anos para ser de maioridade </p>";
    }
}
?>
</body>
</html>
