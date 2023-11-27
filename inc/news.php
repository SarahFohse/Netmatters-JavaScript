<?php

$dbhost = $_ENV['DB_HOST'];
$dbuser = $_ENV['DB_USERNAME'];
$dbpass = $_ENV['DB_PASSWORD'];
$db = $_ENV['DB'];

$conn = new mysqli($dbhost,$dbuser,$dbpass,$db);

if (mysqli_connect_errno()) {
  die("Connection error: " . mysqli_connect_error());
}  

$sql = "SELECT * FROM `news` ORDER BY date_posted DESC LIMIT 3;";

$result = $conn->query($sql);

$rows = [];

while($row = $result->fetch_assoc()) {
  $rows[] = $row;
}

?>