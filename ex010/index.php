<?php
session_start();
if (!isset($_SESSION['menores'])) {
    $_SESSION['menores'] = 0;
    $_SESSION['idosos'] = 0;
    $_SESSION['finalizado'] = false;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && !$_SESSION['finalizado']) {
    $idade = (int)$_POST['idade'];

    if ($idade < 1) {
        $_SESSION['finalizado'] = true;
    } else {
        if ($idade < 18) {
            $_SESSION['menores']++;
        } elseif ($idade > 65) {
            $_SESSION['idosos']++;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Contador de Idades</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            text-align: center;
            padding-top: 60px;
        }
        form {
            background-color: white;
            display: inline-block;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
        }
        input {
            padding: 10px;
            margin-top: 10px;
            width: 100%;
        }
        .resultado {
            margin-top: 30px;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php if (!$_SESSION['finalizado']): ?>
    <form method="POST">
        <h2>Digite a idade:</h2>
        <input type="number" name="idade" required>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
<?php else: ?>
    <div class="resultado">
        <p>Total de pessoas com menos de 18 anos: <strong><?= $_SESSION['menores'] ?></strong></p>
        <p>Total de pessoas com mais de 65 anos: <strong><?= $_SESSION['idosos'] ?></strong></p>
        <form method="post">
            <input type="submit" name="resetar" value="Reiniciar">
        </form>
    </div>
<?php endif; ?>

<?php

if (isset($_POST['resetar'])) {
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>

</body>
</html>
