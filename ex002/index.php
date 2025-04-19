<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Conversão de Temperatura</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            display: flex;
            justify-content: center;
           align-items: center;
        }
        .temp{
            border-radius: 2px;
            border: solid;
            width: 100%;
            padding: 8px;
        }
        .corpo{
            border-radius: 2px;
            border: solid;
            width: 100%;
            padding: 8px;
            
        }
        .todo{
           
            width: 100%;
            padding: 8px;
        }
        form {
            background-color: white;
            padding: 50px;
            border-radius: 10px;
          
        }
        input[type="number"] {
            margin-bottom: 10px;
            width: 50%;
            padding: 8px;
        }
        
         
        
        .resultado {
            margin-top: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<form method="POST">
    <div class="todo">
    <div class="temp">
    <p>Converta a tempertura Fahrenheit em Celsius aqui:</p>
    </div>
    <br>
   <div class="corpo">
    <label>Temperatura °F:</label><br>
    <input type="number" name="temp" step="0.01" required><br>
    
   
    
    <input type="submit" value="Calcular">
</div>
</div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temp = $_POST['temp'];
        

        $conversao = ($temp - 32) / 1.8;

        echo "<div class='resultado'>A temperatura em Celsius é de: " . number_format($conversao, 2, ',', '.') . "</div>";
    }
    ?>
</form>

</body>
</html>
