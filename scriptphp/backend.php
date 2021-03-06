<?php
define('HOST', 'sterne.lab.ecinf.ch:3307');
define('PASSWD', 'Super');
define('USER', 'POCAdmin');
define('DBNAME', 'POCData');

function connectDB() {
    try {
        $db = new PDO("mysql:host=" . HOST . ";dbname=" . DBNAME, USER, PASSWD);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        die("Erreur : " . $e->getMessage());
    }
    return $db;
}

function getEvents($eventsTime) {
    try {
        $connect = connectDB();
        $date = date("Y-m-d");
        $time = date("H:i:s");
        if ($eventsTime == true) {
            $req = $connect->prepare("SELECT * FROM T_EVENTS WHERE eventDate < '" . $date . "' OR eventDate = '" . $date . "' AND eventEnd <= '" . $time . "'");
        }
        if ($eventsTime == false) {
            $req = $connect->prepare("SELECT * FROM T_EVENTS WHERE eventDate > '" . $date . "' OR eventDate = '" . $date . "' AND eventStart <= '" . $time . "' AND eventEnd >'" . $time . "'");
        }
        $req->execute();
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        throw $e;
    }
    return $result;
}


function exportEvent($idEvent, $eventTitle, $eventDate, $eventStart, $eventEnd) {
    $connect = connectDB();
    $req = $connect->prepare("SELECT * FROM T_EVENTS WHERE idEvent = '" . $idEvent . "'");
    $req->execute();
function addEvent($eventTitle,$eventDate,$eventStart,$eventEnd){
    try {
        $connect = connectDB();
        $req = $connect->prepare("INSERT INTO T_EVENTS (eventName,eventDate,eventStart,eventEnd) VALUES('".$eventTitle."','".$eventDate."','".$eventStart."','".$eventEnd."')");
        $req->execute();
    } catch (Exception $e) {
        throw $e;
    }
}

function deleteEvent($idEvent){
    try {
        $connect = connectDB();
        $req = $connect->prepare("DELETE FROM T_EVENTS WHERE idEvent = '".$idEvent."'");
        $req->execute();
    } catch (Exception $e) {
        throw $e;
    }
}
?>
<script>
    function addtocalendar()
    {
        (function () {
            if (window.addtocalendar)
                if (typeof window.addtocalendar.start == "function")
                    return;
            if (window.ifaddtocalendar == undefined) {
                window.ifaddtocalendar = 1;
                var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
                s.type = 'text/javascript';
                s.charset = 'UTF-8';
                s.async = true;
                s.src = ('https:' == window.location.protocol ? 'https' : 'http') + '://addtocalendar.com/atc/1.5/atc.min.js';
                var h = d[g]('body')[0];
                h.appendChild(s);
            }
        })();
    }
</script>