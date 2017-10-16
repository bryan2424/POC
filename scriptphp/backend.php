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
        $req = $connect->prepare("SELECT * FROM T_EVENTS ORDER BY eventDate ASC");
        $req->execute();
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        throw $e;
    }
    return $result;
}

function addEvent($titre,$date,$heureDebut,$heureFin){
    $connexion = connectDB();
    $requete = $connexion->prepare("INSERT INTO T_EVENTS () VALUES(:titre,:date,:heureDebut,:heureFin)");
    $requete->bindparam(':titre', $nom, PDO::PARAM_STR);
    $requete->bindparam(':date', $nom, PDO::PARAM_STR);
    $requete->bindparam(':heureDebut', $nom, PDO::PARAM_STR);
    $requete->bindparam(':heureFin', $nom, PDO::PARAM_STR);
    $requete->execute();
}
?>