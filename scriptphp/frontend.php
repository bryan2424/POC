<?php
include("backend.php");

function showEvents($eventsTime){
    $events = getEvents($eventsTime);
    $result = "<table border='1'><tr><th>Événement</th><th>Date</th><th>Commence à</th><th>Finit à</th></tr>";
    foreach($events as $value){
        $result .= '<tr><td>'.$value["eventName"].'</td><td>'.$value["eventDate"].'</td><td>'.$value["eventStart"].'</td><td>'.$value["eventEnd"].'</td></tr>';
    }
    $result .= "</table>";
    echo $result;
}
?>