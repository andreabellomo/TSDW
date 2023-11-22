<?php

$servername = "localhost";
$username = "root";
$pass = "root";
$dbname = "mydb";

$conn = new mysqli($servername,$username,$pass,$dbname);

if($conn->connect_error){
    die("Connection failed...<br>");
}else{
    echo "connessione riuscita";
}

$query = "CREATE TABLE IF NOT EXISTS user(
    id int(6) UNSIGNED AUTO_INCREMENT primary key,
    name varchar(12)
)";

if ( $conn->query($query)=== true){
    echo "table user created";
}else{
    echo "Error creating 'User' table: " . $conn->error . "<br>";
}


?>