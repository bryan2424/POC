<?php
include("../scriptPhp/frontend.php");
$recap = "";
if (isset($_REQUEST["titre"],$_REQUEST["date"],$_REQUEST["StartTime"],$_REQUEST["EndTime"])) {
    if (($_REQUEST["titre"] && $_REQUEST["date"] && $_REQUEST["StartTime"] && $_REQUEST["EndTime"]) != "") {
        define("EVENT_TITLE",$_REQUEST["titre"]);
        define("EVENT_DATE",$_REQUEST["date"]);
        define("EVENT_START",$_REQUEST["StartTime"]);
        define("EVENT_END",$_REQUEST["EndTime"]);
        $recap = genRecap(EVENT_TITLE, EVENT_DATE, EVENT_START, EVENT_END);
    }
    else{
        header("Location: index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Confirmation</title>
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
                            <li><a href="events.php">liste des rdv</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        
        
        <h1>Récapituatif</h1>
        <?php
        echo $recap;
        ?>
        
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>