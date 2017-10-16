<?php
define('HOST','sterne.lab.ecinf.ch:3307');
define('PASSWD','Super');
define('USER','POCAdmin');
define('DBNAME','POCData');
function connectDB(){
    try {
        $db = new PDO("mysql:host=".HOST.";dbname=".DBNAME, USER, PASSWD);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        die("Erreur : ".$e->getMessage());
    }
    return $db;
}

function getEvents($eventsTime){
    try {
        $connect = connectDB();
        $date = date("Y-m-d");
        $time = date("H:i:s");
        if ($eventsTime == true) {
            $req = $connect->prepare("SELECT * FROM T_EVENTS WHERE eventDate < '".$date."' OR eventDate = '".$date."' AND eventEnd <= '".$time."'");
        }
        if($eventsTime == false){
            $req = $connect->prepare("SELECT * FROM T_EVENTS WHERE eventDate > '".$date."' OR eventDate = '".$date."' AND eventStart <= '".$time."' AND eventEnd >'".$time."'");
        }
        $req->execute();
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        throw $e;
    }
    return $result;
}

function addEvent($eventTitle,$eventDate,$eventStart,$eventEnd){
    $connect = connectDB();
    $req = $connect->prepare("INSERT INTO T_EVENTS (eventName,eventDate,eventStart,eventEnd) VALUES('".$eventTitle."','".$eventDate."','".$eventStart."','".$eventEnd."')");
    $req->execute();
}

function deleteEvent($idEvent){
    $connect = connectDB();
    $req = $connect->prepare("DELETE FROM T_EVENTS WHERE idEvent = ".$idEvent);
    $req->execute();
}
?>