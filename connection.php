<?php
$dbconnection = "mysql";
$serverName = "remotemysql.com";
$userName = "egFfm6kqtF";
$password = "KJKle4HN8d";
$databaseName = "egFfm6kqtF";
$port = "3306";

$conn = mysqli_connect($dbconnection,$serverName,$userName,$password,$databaseName);

if(!$conn){
    echo "Disconnected";
}
