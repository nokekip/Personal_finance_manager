<?php

$host = 'localhost';
$user = 'root';
$pass = 'noke5';
$db   = 'pfund_db';

$conn = new mysqli($host, $user, $pass, $db);

// checks if there is connection
if($conn->connect_error) {
    die('Database Connection error: ' . $conn->connect_error);
}