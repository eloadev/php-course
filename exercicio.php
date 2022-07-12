<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/exercicio.css">
    <script src="https://kit.fontawesome.com/05ccc3741f.js" crossorigin="anonymous"></script>
    <title>Curso PHP</title>
</head>

<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização dos exercícios</h2>
    </header>
    <nav class="navegacao">
        <a href="" onClick="window.location.reload();" class="yellow">Refresh</a>
        <a href=<?= "{$_GET["dir"]}/{$_GET["file"]}.php" ?> class="green">Sem formatacao</a>
        <a href="index.php" class="red">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </div>
    </main>
    <footer class="rodape">
        <p>Eloá Mello © <?= date('Y'); ?></p>
    </footer>
</body>

</html>