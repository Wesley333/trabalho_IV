<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Formulário</title>
    <link href="src/output.css" rel="stylesheet">
    <link rel="shortcut icon" href="https://img.icons8.com/?size=256&id=81702&format=png" type="image/x-icon">
</head>
<body class="bg-gradient-to-t from-sky-800 to-cyan-500 h-screen">
    <h1 class="text-center shadow-sm text-white text [text-shadow:1px_1px_2px_var(--tw-shadow-color)] shadow-black text-3xl font-mono p-2">
        DADOS DO FORMULÁRIO
    </h1>
    <main>
        <div class="centralizar mt-24 text-2xl border-4 border-slate-700 p-4 mb-14 bg-slate-400">
            <?php

                        
            function clean($args) {
                $args = trim(htmlspecialchars($args));
                return $args;
            }

            echo "<div>";

            foreach($_GET as $value) {
                 print_r($value) . '<br>';
            }

            echo "</div>";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Capturando os dados do formulário
                $nome = clean($_POST["nome"]);
                $email = clean($_POST["email"]);
                $mensagem = clean($_POST["mensagem"]);
                $motivoContato = clean($_POST["motivo_contato"]);
            
                ?>

         <!-- Exibindo os dados capturados -->
                <div>
                    <p> <?php echo 'Nome: ' .  $nome; ?> </p>
                    <p> <?php echo 'Email: ' . $email; ?> </p>
                    <p> <?php echo 'Mensagem: ' . $mensagem; ?> </p>
                    <p> <?php echo 'Motivio do Contato: ' . $motivoContato; ?> </p>
                </div>


            <?php 

            } else {
                echo "<p>Por favor, preencha o formulário primeiro.</p>";
            }

            ?>
            
        </div>
        <div class="text-center">
                <a class="link" href="index.html">Voltar</a>
            </div>
    </main>
    <footer></footer>
</body>
</html>
