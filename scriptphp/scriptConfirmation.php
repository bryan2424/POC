<?php
include("backend.php");
if (isset($_REQUEST["eventName"],$_REQUEST["eventDate"],$_REQUEST["eventStart"],$_REQUEST["eventEnd"])) {
    if (($_REQUEST["eventName"] && $_REQUEST["eventDate"] && $_REQUEST["eventStart"] && $_REQUEST["eventEnd"]) != "") {
        define("EVENT_TITLE",$_REQUEST["eventName"]);
        define("EVENT_DATE",$_REQUEST["eventDate"]);
        define("EVENT_START",$_REQUEST["eventStart"]);
        define("EVENT_END",$_REQUEST["eventEnd"]);
        addEvent(EVENT_TITLE, EVENT_DATE, EVENT_START, EVENT_END);
        header("Location: ../files/events.php");
    }
    else{
        header("Location: ../files/index.php");
    }
}
else{
    header("Location: ../files/index.php");
}
?>