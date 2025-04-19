<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Ler 5 nomes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(180, 228, 216);
            padding: 50px;
      
        }
        input[type="text"] {
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
    <label>Digite o 1° nome:</label>
    <input type="text" name="nome1" required>
    <label>Digite o 2° nome:</label>
    <input type="text" name="nome2" required>
    <label>Digite o 3° nome:</label>
    <input type="text" name="nome3" required>
    <label>Digite o 4° nome:</label>
    <input type="text" name="nome4" required>
    <label>Digite o 5° nome:</label>
    <input type="text" name="nome5" required>

    

    <input type="submit" value="Imprimir Nomes">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomes = array(
        $_POST['nome1'],
        $_POST['nome2'],
        $_POST['nome3'],
        $_POST['nome4'],
        $_POST['nome5']
    );

    echo "<div class='resultado'>";
    echo "<h3>Os nomes inseridos foram:</h3>";
    foreach ($nomes as $nome) {
        echo $nome . ", ";
    }
   
}
?>

</body>
</html>
