<?php
$num1 = 0;
$num2 = 0;
$resultado = 0;
$calcular = 'somar';

if (isset($_GET['num1'], $_GET['num2'], $_GET['calcular'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $calcular = $_GET['calcular'];

    if ($calcular == 'somar') {
        $resultado = $num1 + $num2;
    } else if ($calcular == 'subtrair') {
        $resultado = $num1 - $num2;
    } else if ($calcular == 'dividir') {
        $resultado = $num1 / $num2;
    } else if ($calcular == 'multiplicar') {
        $resultado = $num1 * $num2;
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Claculadora</title>
</head>
<body>
    <form>
        <h1>CALCULADORA</h1>
        Primeiro número<br/>
       <input type="number" name="num1" value=<?= $num1?> required  /><br/>
       Segundo número <br/>
       <input type="number" name="num2" value=<?= $num2?> required /><br/>
       <select name="calcular">
        <option value="somar" <?= ($calcular=='somar')?'Selected':'';?>>Somar</option>
        <option value="subtrair"<?= ($calcular=='subtrair')?'Selected':'';?>>Subtrair</option>
        <option value="dividir"<?= ($calcular=='dividir')?'Selected':'';?>>Dividir</option>
        <option value="multiplicar"<?= ($calcular=='multiplicar')?'Selected':'';?>>Multiplicar</option>
       </select>
       <br>
       <br>
       <input type="submit" value="Calcular">
    <br>
    <br>
    <p>O resultado é <?= $resultado?></p>
    </form>
</body>
</html>