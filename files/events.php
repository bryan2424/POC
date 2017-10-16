<?php
include("../scriptPhp/frontend.php");
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Événements</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <!-- nav -->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">POC</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="index.php">Creer un evenement</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        
        
        <h1>Événements courants ou futurs :</h1>
        <?php
        showEvents(false);
        ?>
        <h1>Événements passés :</h1>
        <?php
        showEvents(true);
        ?>
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>