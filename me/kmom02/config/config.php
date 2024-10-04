<!DOCTYPE html>    
<html lang ="sv">
<head>
    <meta charset="UTF-8">
    <title>report all typs of errors</title>
    <?php include('../view/header.php'); ?>
</head>

<body>

<?php

// Report all type of errors
error_reporting(-1);

// Display all errors
ini_set('display_errors', '1');