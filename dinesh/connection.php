<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "school";

$conn = mysqli_connect($host, $user, $password, $db);

if (mysqli_connect_error()) {
    echo "error";
}