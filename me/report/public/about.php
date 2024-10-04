<!DOCTYPE html>    
<html lang ="sv">
<head>
    <meta charset="UTF-8">
    <title><?php $title; ?></title>
</head>
<body>
    
<?php
include('../config/config.php');
$title = 'Om kurs och webbplatsen';
include('../view/header.php');
?>
<main>
    <h1>kursen webbteknologier</h1>
    <p>Kursen Webbteknologier, a.k.a. webtec, lär ut webbutveckling där teknikerna HTML, CSS, PHP och SQL används för att tillsammans bygga en databasdriven webbplats.</p>
    <img src="img/favicon.png" width="300" class="me" alt="Bild på mig">
</main>

<?php include('../view/footer.php') ?>
<a href="https://dbwebb.se/webtec">MDN: HTML</a>

</body>
</html>