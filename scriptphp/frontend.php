<?php
include("backend.php");

function showEvents(){
    $events = getEvents();
    $result = "<table border='1'><tr><th>�v�nement</th><th>Date</th><th>Commence �</th><th>Finit �</th></tr>";
    foreach($events as $value){
        $result .= '<tr><td>'.$value["eventName"].'</td><td>'.$value["eventDate"].'</td><td>'.$value["eventStart"].'</td><td>'.$value["eventEnd"].'</td></tr>';
    }
    $result .= "</table>";
    echo $result;
}
?>