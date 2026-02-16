<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Volatus to grupa uczniów z I LO w Brzozowie biorąca udział w europejskim konkursie CanSat. Naszą misjią jest przedstawienie działania technologii INS." />
    <meta property="og:title" content="Aktualności — Volatus">
    <meta property="og:description" content="Volatus to grupa uczniów z I LO w Brzozowie biorąca udział w europejskim konkursie CanSat. Naszą misjią jest przedstawienie działania technologii INS.">
    <meta property="og:image" content="img/logoM.svg">
    <title>Aktualności — Volatus</title>
    <link rel="icon" href="../img/logoM.svg">
    <link rel="stylesheet" type="text/css" href="../styles/styles.css?v=6">
</head>

<body>
    <!-- Pasek -->
    <div id="pasek">
        <a href="https://volatus.pl">
            <img src="../img/logo.svg" alt="Logo">
        </a>
    </div>
    <div id="sub-strona">
        <h1 class="c1" id="h1">Aktualności</h1>
        <?php
        $events = json_decode(file_get_contents('../blog/blog.json'));
        ?>
        <?php foreach ($events as $event): ?>
            <h2 class="c1">
                <?= $event->date; ?>
            </h2>
            <div class="panel">
                <p>
                    <?= $event->description; ?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>