<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?> | My website</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/favicon.ico">
</head>
<body>

<div class="row">
    <header class="siteheader">
        <p>Site header</p>
    </header>
</div>

<div class="navbar">
    <nav>
        <a href="home.php">Home</a>
        <a href="report.php">Report</a>
        <a href="about.php">About</a>
    </nav>
</div>

<div class="row row-main">
    <main class="main">
        <?php if ($main ?? null) : ?>
            <?= $main ?>
        <?php else : ?>
            <h1>Page</h1>
            <p>This is default text for the page.</p>
        <?php endif; ?>
    </main>
    <aside class="aside">
        <?php if ($aside ?? null) : ?>
            <?= $aside ?>
        <?php else : ?>
            <p>Aside default text</p>
        <?php endif; ?>
    </aside>
</div>

<div class="row">
    <footer class="sitefooter">
        <p>Site footer</p>
    </footer>
</div>

<script src="js/main.js"></script>
</body>
</html>
