<?php
$dbconnection = "mysql";
$serverName = "remotemysql.com";
$userName = "egFfm6kqtF";
$password = "KJKle4HN8d";
$databaseName = "egFfm6kqtF";
$port = "3306";

$conn = mysqli_connect($serverName,$userName,$password,$databaseName,$port);

if(!$conn){
    echo "Disconnected";
}
