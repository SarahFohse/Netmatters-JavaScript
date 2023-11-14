<?php

$dbhost = "localhost";
$dbuser = "sarahfoh_sarahfohse";
$dbpass = "aSljP,a6v{N8";
$db = "sarahfoh_netmatters";

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