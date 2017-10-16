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

function getEvents(){
    try {
        $connect = connectDB();
        $req = $connect->prepare("SELECT * FROM T_EVENTS");
        $req->execute();
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        throw $e;
    }
    return $result;
}
?>