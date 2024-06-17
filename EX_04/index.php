<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="https://calculadoranormal.com/wp-content/uploads/2023/02/calculadora-normal-logo.png" type="image/x-icon">
</head>

<body>

    <?php

    $n1 = $_GET['n1'] ?? 0;
    $n2 = $_GET['n2'] ?? 0;
    $op = $_GET['op'] ?? '+';

    ?>
    
    <main>
        <form action="" method="get">
            <label for="n1">Digite um número</label>
            <input type="number" name="n1" id="n1" required value="<?= $n1 ?>">
            <label for="op">Escolha a operação</label>
            <input type="text" name="op" id="op" value="<?= $op ?>">
            <label for="n2">Digite o segundo número</label>
            <input type="number" name="n2" id="n2" value="<?= $n2 ?>">
            <input type="submit" value="Calcular">

        </form>
    </main>

    <section>
        <h2>Resultado da operação</h2>
        <?php

        if ($op) {
            if ($op == '+') {
                $total = $n1 + $n2;
                echo "O resultado da Adição entre <strong>$n1 $op $n2</strong> é igual á: <strong>($total)</strong>";
            } elseif ($op == '-') {
                $total = $n1 - $n2;
                echo "O resultado da Subtração entre <strong>$n1 $op $n2</strong> é igual á: <strong>($total)</strong>";
            } elseif ($op == '*') {
                $total = $n1 * $n2;
                echo "O resultado da Multiplicação entre <strong>$n1 $op $n2</strong> é igual á: <strong>($total)</strong>";
            } elseif ($op == '/') {
                $total = $n1 / $n2;
                echo "O resultado da Divisão entre <strong>$n1 $op $n2</strong> é igual á: <strong>($total)</strong>";
            } elseif ($op == '.') {
                $total = $n1 >= 0 ;
                echo $total = sqrt($n1);
            }
            
        }
        ?>

    </section>

</body>

</html>