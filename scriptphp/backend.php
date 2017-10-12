<?php
CONST HOST = "http://sterne.lab.ecinf.ch";
CONST PASSWD = "Super";
CONST USER = "POCAdmin";
CONST DBNAME = "POCData";
function connectDB(){
    $db = new PDO("mysql:host=".HOST.";dbname=".DBNAME."", USER, PASSWD);
    
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