<?php
CONST HOST = "http://sterne.lab.ecinf.ch";
CONST PASSWD = "Super";
CONST USER = "POCAdmin";
CONST DBNAME = "POCData";
function connectDB(){
    $db = new PDO("mysql:host=".HOST.";dbname=".DBNAME."", USER, PASSWD);
}
?>