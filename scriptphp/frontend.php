<link href="http://addtocalendar.com/atc/1.5/atc-style-blue.css" rel="stylesheet" type="text/css">
<link href="../css/style.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><?php
require_once 'backend.php';

function showEvents($eventsTime) {
    $events = getEvents($eventsTime);
    $result = "<table border='1'><tr><th>Événement</th><th>Date</th><th>Commence à</th><th colspan='1'>Finit à</th></tr>";
    foreach ($events as $value) {
        $result .= '<tr><td>' . $value["eventName"] . '</td><td>' . $value["eventDate"] . '</td><td>' . $value["eventStart"] . '</td><td>' . $value["eventEnd"] . '</td><td><a href="../scriptphp/scriptDelete.php?idEvent=' . $value["idEvent"] . '">Annuler</a></td><td>' . exportButton();
        '</td></tr>';
    }
    $result .= "</table>";
    echo $result;
}

<<<<<<< HEAD
function exportButton() {
    ?>
    <script>
        addtocalendar();
    </script>
    <span class="addtocalendar atc-style-blue">
        <var class="atc_event">
            <var class="atc_date_start"></var>
            <var class="atc_date_end">2017/10/15 09:00:00</var>
            <var class="atc_timezone">Europe/London</var>
            <var class="atc_title">agdffa</var>
            <var class="atc_description">agga</var>
            <var class="atc_location">adfa</var>
            <var class="atc_organizer">agfag</var>
            <var class="atc_organizer_email">tehxso7@gmail.com</var>
        </var>
    </span>
    <?php
}

function genRecap($eventTitle, $eventDate, $eventStart, $eventEnd) {
    $result = "<form method='POST' action='../scriptphp/scriptConfirmation.php'><input type='hidden' name='eventName' value='" . $eventTitle . "'><input type='hidden' name='eventDate' value='" . $eventDate . "'><input type='hidden' name='eventStart' value='" . $eventStart . "'><input type='hidden' name='eventEnd' value='" . $eventEnd . "'><table><tr><td>Nom de l'événement :</td><td>" . $eventTitle . "</td></tr><tr><td>Date prévue :</td><td>" . $eventDate . "</td></tr><tr><td>Heure de début :</td><td>" . $eventStart . "</td></tr><tr><td>Heure de fin :</td><td>" . $eventEnd . "</td></tr><tr><td><input type='submit'></td></tr></table></form>";
=======
function genRecap($eventTitle,$eventDate,$eventStart,$eventEnd){
    $result = "<form method='POST' action='../scriptphp/scriptConfirmation.php'><input type='hidden' name='eventName' value='".$eventTitle."'><input type='hidden' name='eventDate' value='".$eventDate."'><input type='hidden' name='eventStart' value='".$eventStart."'><input type='hidden' name='eventEnd' value='".$eventEnd."'><table><tr><td>Nom de l'événement :</td><td>".$eventTitle."</td></tr><tr><td>Date prévue :</td><td>".$eventDate."</td></tr><tr><td>Heure de début :</td><td>".$eventStart."</td></tr><tr><td>Heure de fin :</td><td>".$eventEnd."</td></tr><tr><td><input type='submit'><input type=\"button\" onclick=\"window.location.replace('index.php')\" value=\"Annuler\" /></td></tr></table></form>";
>>>>>>> 42f327121a77c6211f125cdc387520bb5cb959f4
    return $result;
}
?>