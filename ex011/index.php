<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Ler 5 Números Inteiros</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(180, 228, 216);
            padding: 50px;
      
        }
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 15px;
            font-size: 16px;
            box-sizing: border-box; 
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        input[type="submit"] {
            border: none;
            font-weight: bold;
            padding: 10px;
            width: 100%;
        }
        .resultado {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<form method="POST">
    <label>Digite o número 1:</label>
    <input type="number" name="num1" required>

    <label>Digite o número 2:</label>
    <input type="number" name="num2" required>

    <label>Digite o número 3:</label>
    <input type="number" name="num3" required>

    <label>Digite o número 4:</label>
    <input type="number" name="num4" required>

    <label>Digite o número 5:</label>
    <input type="number" name="num5" required>
<br>
    <input type="submit" value="Imprimir Números">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numeros = array(
        $_POST['num1'],
        $_POST['num2'],
        $_POST['num3'],
        $_POST['num4'],
        $_POST['num5']
    );

    echo "<div class='resultado'>";
    echo "<h3>Os números inseridos foram:</h3>";
    foreach ($numeros as $numero) {
        echo $numero . ", ";
    }
   
}
?>

</body>
</html>
