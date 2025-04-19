<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cálculo da Média</title>
    
</head>
<body>

<form method="POST">
    <h2>Par ou Ímpar?:</h2>
    <label>Digite um número:</label><br>
    <input type="number" name="num" step="0.0" required><br>
    
   
    
    <input type="submit" value="Verificar">

   
    
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST['num'];

    if ($num% 2 == 0) {
        echo "<p>O número <strong>$num</strong> é <strong>par</strong>.</p>";
    } else {
        echo "<p>O número <strong>$num</strong> é <strong>ímpar</strong>.</p>";
    }
}
?>
</body>
</html>
