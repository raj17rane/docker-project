<?php
header("content-type: text");
$host = "db"; //The hostname "db" from docker-compose.yaml file!!!
$username = "mysql"; // we user roor user
$pw = "my!!!root!!!pw"; // we set password as env

$conn = new mysqli($host,$username,$pw);

if ($conn->connect_error > 0) {
    echo $db->connect_error;
} else {
   # echo "DB connection successful\n\n";
    echo "Connected successfully\n\n";
}
