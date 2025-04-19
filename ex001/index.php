<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cálculo da Média</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
           
        }
        form {
            background-color: white;
            padding: 100px;
            border-radius: 10px;
          
        }
        input[type="number"] {
            margin-bottom: 10px;
            width: 100%;
            padding: 8px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            width: 25%;
            border: none;
           
         
        }
        .resultado {
            margin-top: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<form method="POST">
    <h2>Descubra qual é a sua Média Escolar:</h2>
    <label>Nota 1:</label><br>
    <input type="number" name="nota1" step="0.01" required><br>
    
    <label>Nota 2:</label><br>
    <input type="number" name="nota2" step="0.01" required><br>
    
    <label>Nota 3:</label><br>
    <input type="number" name="nota3" step="0.01" required><br>
    
    <label>Nota 4:</label><br>
    <input type="number" name="nota4" step="0.01" required><br>
    
    <input type="submit" value="Calcular Média">

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];
        $nota4 = $_POST['nota4'];

        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

        echo "<div class='resultado'>A sua média é: " . number_format($media, 2, ',', '.') . "</div>";
    }
    ?>
</form>

</body>
</html>
