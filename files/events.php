<?php
include("../scriptPhp/frontend.php");
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Événements</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h1>Événements courants ou futurs :</h1>
        <?php
        showEvents(false);
        ?>
        <h1>Événements passés :</h1>
        <?php
        showEvents(true);
        ?>
    </body>
</html>