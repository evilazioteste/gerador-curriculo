<?php
$nome = $_POST['nome'];
$nascimento = $_POST['nascimento'];
$idade = $_POST['idade'];
$experiencias = $_POST['experiencias'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Currículo de <?php echo htmlspecialchars($nome); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">
    <h1>Currículo</h1>
    <p><strong>Nome:</strong> <?php echo htmlspecialchars($nome); ?></p>
    <p><strong>Data de Nascimento:</strong> <?php echo htmlspecialchars($nascimento); ?></p>
    <p><strong>Idade:</strong> <?php echo htmlspecialchars($idade); ?> anos</p>
    <h3>Experiências Profissionais:</h3>
    <ul>
        <?php foreach ($experiencias as $exp): ?>
            <li><?php echo htmlspecialchars($exp); ?></li>
        <?php endforeach; ?>
    </ul>
    <button onclick="window.print();" class="btn btn-success mt-4">Imprimir Currículo</button>
</body>
</html>
