<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffeccc;
            margin: 0;
            padding: 0;
        }

        
        h2 {
            text-align: center;
        }

        [type=input"text"],
        select {
            margin-bottom: 15px;
            width: 50%;
            padding: 10px;
            font-size: 16px;
            box-sizing: border-box; /* isso garante que o padding não estoure o tamanho */
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #ff9800;
            color: white;
            padding: 12px;
            width: 50%;
            border: none;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        .resultado {
            margin-top: 20px;
            font-weight: bold;
            font-size: 18px;
        }
    </style>
</head>
<body>

<form method="POST">
    <h2> MCdonald's 🍟</h2>

    <label>Informe seu nome:</label><br>
    <input type="text" name="nome" required><br>

    <label>Escolha seu lanche:</label><br>
    <select name="lanche" required>
        <option value="">-- Selecione --</option>
        <option value="1">X-Burguer - R$10,00</option>
        <option value="2">X-Salada - R$12,00</option>
        <option value="3">X-Bacon - R$14,00</option>
        <option value="4">Cachorro-Quente - R$9,00</option>
        <option value="5">Batata Frita - R$8,00</option>
        <option value="6">Refrigerante - R$5,00</option>
    </select><br>

    <input type="submit" value="Fazer Pedido"><br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $lanche = $_POST['lanche'];

        $menu = [
            "1" => ["nome" => "X-Burguer", "preco" => 10.00],
            "2" => ["nome" => "X-Salada", "preco" => 12.00],
            "3" => ["nome" => "X-Bacon", "preco" => 14.00],
            "4" => ["nome" => "Cachorro-Quente", "preco" => 9.00],
            "5" => ["nome" => "Batata Frita", "preco" => 8.00],
            "6" => ["nome" => "Refrigerante", "preco" => 5.00],
        ];

        echo "<div class='resultado'>";
        echo "Olá, <strong>$nome</strong>! Seja bem-vindo ao MCdonald's 🍟!<br><br>";

        if (array_key_exists($lanche, $menu)) {
            $escolha = $menu[$lanche]["nome"];
            $preco = number_format($menu[$lanche]["preco"], 2, ',', '.');
            echo "Você escolheu: <strong>$escolha</strong>.<br>";
            echo "O valor do seu pedido é: <strong>R$$preco</strong>.";
        } else {
            echo "Ops! A opção escolhida não existe no nosso cardápio.";
        }

        echo "</div>";
    }
    ?>
</form>

</body>
</html>
