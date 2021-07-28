<?php
$serverName = "localhost";
$userName = "root";
$password = "munyizz";
$databaseName = "vela";

$conn = mysqli_connect($serverName,$userName,$password,$databaseName);

if(!$conn){
    echo "Disconnected";
}
