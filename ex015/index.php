<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Área de Retângulo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef;
            padding: 30px;
        }
        form {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            width: 300px;
            margin: auto;
            box-shadow: 0 0 10px #aaa;
        }
        input[type="number"], input[type="submit"] {
           
            margin-bottom: 15px;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            box-sizing: border-box; 
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        .resultado {
            margin-top: 20px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>

<form method="POST">
   
    
    <label>Base:</label>
    <input type="number" name="largura" step="0.01" required>

    <label>Altura:</label>
    <input type="number" name="altura" step="0.01" required>

    <input type="submit" value="Calcular">

    <?php
    function calculaAreaRetangulo($largura, $altura) {
        return $largura * $altura;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $largura = $_POST['largura'];
        $altura = $_POST['altura'];

        $area = calculaAreaRetangulo($largura, $altura);
        echo "<div class='resultado'>A área do retângulo é: $area</div>";
    }
    ?>
</form>

</body>
</html>
