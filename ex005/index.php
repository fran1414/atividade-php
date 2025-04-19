<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Velocidade máxima permitida</title>
    
</head>
<body>

<form method="POST">
    <h2>Para veificar se você ultrapssou a velocidade máxima permitida...</h2>
    <label>Digite a velocidade marcada em seu velocimetro:</label><br>
    <input type="number" name="velocidade" required><br>
    <input type="submit" value="Verificar"> 
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $velocidade = $_POST['velocidade'];
    if ($velocidade > 110) {
        echo "<p> Ops! Você pisou o pé no acelerador e esqueceu da vida?! </p>";
    } else {
        echo "<p>É isso ai! Você é um(a) motorista consciente! </p>";
    }
}
?>
</body>
</html>
