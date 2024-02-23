<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die('Error...' . $conn->connect_error);
} else {
    echo 'Connected Succesfully';
}

?>