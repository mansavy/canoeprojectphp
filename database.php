<?php
$dbPassword = "lizardking";
$dbUserName = "mandy";
$dbServer = "localhost";
$dbName = "canoe";

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

if($connection->connect_errno)
{
    exit("Database Connection Failed. Reason: ".$connection->connect_error);
}

?>