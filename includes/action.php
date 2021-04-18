<?php

$db_host = 'localhost';
$db_databse = 'Odisha_db';
$db_username = 'root';
$db_password = '';

$conn = mysqli_connect($db_host, $db_username, $db_password, $db_databse);

if (!$conn) {
    die("connection Failed: " . mysqli_connect_error());
}
