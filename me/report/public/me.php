<!DOCTYPE html>
<html lang="sv">

<head> 
<?php
    include('../config/config.php');

    $title = 'välkommen  till min hemsida';
?>
    <title><?=$title ?></title>
</head>
<body>

<?php include('../view/header.php'); ?>

<main>
        <h1>Här är lite information om mig</h1>
        <p>Jag är en student här och pluggar till webb programmerare första terminen.</p>
        <img src="img/background.jpg" width="300" class="me" alt="Bild på mig">

</main>

<footer>
    <?php

    // Set the timezone to use
        date_default_timezone_set('Europe/Stockholm');

    // The date of today
        $today = date('Y-m-d H:i:s');

    // Name of the week day class="something"
        $weekday = date('l');
    ?>

        <p>Dagens datum är <?= $today ?> och idag är det <?= $weekday ?>.</p>

</footer>

<?php include('../view/footer.php'); ?>

</body>
</html>