<?php

/**
 *   DATABASE CONNECTION
 */

// CONNECTION INFO

$host = 'localhost';
$username = 'root';
$password = 'root';
$db_name = 'db_hotel';

// Open CONNECTION

$conn = new mysqli($host, $username, $password, $db_name);
var_dump($conn);

// Check Connection 
if($conn && $conn->connect_error){
    die("Connection failed: $conn->connect_error");
} else{
    echo "Connection ok";
}