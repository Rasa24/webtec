<!DOCTYPE html>    
<html lang ="sv">
<head>
    <meta charset="UTF-8">
    <title>Dagens Datum och Tid</title>
    <?php include('../view/header.php'); ?>
</head>

<body>
<?php
// Set the timezone to use
date_default_timezone_set('Europe/Stockholm');

// The date of today
$today=date('Y-m-d H:i:s');

// The time of the day
$time=date('H:i:s');

// Name of the week day 
$weekday=date('l'); 

// The number of the week
$week_number=date('W');
?>
<h1>Dagens datum är <?= ($today) ?>.</h1>
<p style="font-size: 35px;color: black">idag är det <?=($weekday) ?>.</p>
<h1>Tiden är <?= ($time) ?>.</h1>
<p>Veckans nummer är <?= ($week_number) ?>.
</p>

<?php include('../view/footer.php'); ?>
</body>

</html>