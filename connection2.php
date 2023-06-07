<?php

$servername="localhost";
$username="root";
$password="";
$db_name="fc_games";

$conn = new mysqli($servername, $username, $password, $db_name);

if($conn->connection_error){
    die("connection failed". $conn->connection_error);
}

echo"connection successful";

?>