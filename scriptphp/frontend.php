<?php
include("backend.php");

function showEvents(){
    $events = getEvents();
    $result = "<table border='1'>";
    foreach($events as $value){
        $result .= '<tr><td>'.$value["eventName"].'</td><td>'.$value["eventDate"].'</td></tr>';
    }
    $result .= "</table>";
    echo $result;
}
?>