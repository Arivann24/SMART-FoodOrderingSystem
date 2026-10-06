<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "food_ordering";

$conn = mysqli_connect(
    $servername,
    $username,
    $password,
    $database
);


if (!$conn) {

    die("Database Connection Failed: " . mysqli_connect_error());

}

echo "Database Connected Successfully";

?>