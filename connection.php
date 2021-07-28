<?php
$serverName = "remotemysql.com";
$userName = "egFfm6kqtF";
$password = "KJKle4HN8d";
$databaseName = "egFfm6kqtF";

$conn = mysqli_connect($serverName,$userName,$password,$databaseName);

if(!$conn){
    echo "Disconnected";
}
