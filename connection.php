<?php
$dbconnection = "";
$serverName = "";
$userName = "";
$password = "";
$databaseName = "";
$port = "";

$conn = mysqli_connect($serverName,$userName,$password,$databaseName,$port);

if(!$conn){
    echo "Disconnected";
}
