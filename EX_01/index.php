<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Múltiplos</title>
</head>

<body>
    <main>
        <?php
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                echo "Número $i é múltiplo de 3 e 5 <br>";
            } elseif ($i % 3 == 0) {
                echo "Número $i é múltiplo de 3 <br>";
            } elseif ($i % 5 == 0) {
                echo "Número $i é múltiplo de 5 <br>";
            }
        }
        ?>
    </main>

</body>

</html>