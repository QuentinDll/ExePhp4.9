<?php
// definition du temps locale
setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
// definition de $timestamp_actuel grace a time()
$timestamp_actuel = time();
// 
$timestamp = strtotime('02/08/2016');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Exercice 4</title>
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
            <h1>Exercice 4</h1>
            <a href="http://exephpp9/">Index</a>
        </nav>
        <p>
            <?= $timestamp_actuel; ?>
            <br/>
            <?= $timestamp; ?>
        </p>
    </body>
</html>
