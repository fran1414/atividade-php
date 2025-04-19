<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Termômetro</title>
    
</head>
<body>

<form method="POST">
    <h2>Verifiuqe a sua temperatura corpórea:</h2>
    <label>Digite a sua temperatura:</label><br>
    <input type="number" name="temp" step="0.00"  required><br>
    <input type="submit" value="Verificar"> 
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $temp= $_POST['temp'];
    if ($temp > 36.7 ) {
        echo "<p>Você está com a temperatura corpórea acima do normal, ou seja você está com febre! </p>";
    } else {
        echo "<p>Viva! Está tudo bem com o seu corpo! </p>";
    }
}
?>
</body>
</html>
