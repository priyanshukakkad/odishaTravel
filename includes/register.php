<?php


include_once 'action.php';


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$pwd = $_POST['password'];

$sql = "INSERT INTO user (id, firstname, lastname, email, password) VALUES ('0', '$firstname', '$lastname', '$email', '$pwd');";

mysqli_query($conn, $sql);

header("Location: ../index.php?signup=success");

