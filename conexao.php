<?php

$servername = "localhost";
$username = "id20538382_victor";
$password = "5ZHe~E/8q=P5dnbR";
$dbname = "id20538382_login";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

?>