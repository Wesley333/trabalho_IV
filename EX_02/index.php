<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Par ou Ímpar</title>
</head>

<body>

    <main>
        <form method="post" action="">
            <label for="numero">Informe um número:</label>
            <input type="number" id="numero" name="numero" required>
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = filter_input(INPUT_POST, 'numero');
            if ($numero >= 0) {
                echo "O número digitado foi: $numero <br>";
                $resultado = ($numero % 2 == 0) ? "Par" : "Ímpar";
                echo "E $numero é um número $resultado.";
            } else {
                echo "Por favor, insira um número válido.";
            }
        }
        ?>
    </section>



</body>

</html>