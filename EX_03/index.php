<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contador de Caracteres</title>
</head>

<body>
    <main>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="texto">Digite uma palavra ou texto:</label><br>
            <textarea id="texto" name="texto" rows="4" cols="50" required></textarea><br>
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $texto = $_POST['texto'];
            $caracteres = strlen($texto);
            echo "A string digitada possui um total de $caracteres caracteres.";
        }
        ?>
    </section>

</body>

</html>