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
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Confirmation</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h1>Récapituatif</h1>
        <?php
        echo $recap;
        ?>
    </body>
</html>