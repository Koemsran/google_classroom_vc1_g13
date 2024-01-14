<?php require_once('templates/header.php');

$hostName = "localhost";
$dbName = "google_classroom";
$userName = "root";
$password = "";
$db = new PDO("mysql:host=$hostName; dbname = $dbname", $userName, $password);

function getItem(){
    global $db;
    $statment = $db->prepare("SELECT * FROM google_classroom");
    $statment->execute();
    return $statment->fetch();
}

function getItems(){
    global $db;
    $statment = $db->prepare("SELECT * FROM google_classroom");
    $statment->execute();
    return $statment->fetchAll();

}