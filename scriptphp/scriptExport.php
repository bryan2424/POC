<?php
include("backend.php");

if (isset($_REQUEST["idEvent"])) {
    if ($_REQUEST["idEvent"] != "") {
        define("ID_EVENT", $_REQUEST["idEvent"]);
        exportEvent(ID_EVENT);
        header("Location: ../files/events.php");
    }
    else{
        header("Location: ../files/events.php");
    }
}
else{
    header("Location: ../files/events.php");
}
?>