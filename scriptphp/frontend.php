<?php
require_once 'backend.php';

function showEvents($eventsTime){
    $events = getEvents($eventsTime);
    $result = "<table border='1'><tr><th>Événement</th><th>Date</th><th>Commence à</th><th>Finit à</th></tr>";
    foreach($events as $value){
        $result .= '<tr><td>'.$value["eventName"].'</td><td>'.$value["eventDate"].'</td><td>'.$value["eventStart"].'</td><td>'.$value["eventEnd"].'</td></tr>';
    }
    $result .= "</table>";
    echo $result;
}

function genRecap($eventTitle,$eventDate,$eventStart,$eventEnd){
    $result = "<form method='POST' action='../scriptphp/scriptConfirmation.php'><input type='hidden' name='eventName' value='".$eventTitle."'><input type='hidden' name='eventDate' value='".$eventDate."'><input type='hidden' name='eventStart' value='".$eventStart."'><input type='hidden' name='eventEnd' value='".$eventEnd."'><table><tr><td>Nom de l'événement :</td><td>".$eventTitle."</td></tr><tr><td>Date prévue :</td><td>".$eventDate."</td></tr><tr><td>Heure de début :</td><td>".$eventStart."</td></tr><tr><td>Heure de fin :</td><td>".$eventEnd."</td></tr><tr><td colspan='3'><input type='submit'></td></tr></table></form>";
    return $result;
}
?>