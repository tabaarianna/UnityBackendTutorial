<?php

$servername= "localhost";
$username = "root";
$password = "";
$dbname = "unitybackendtutorial";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {

    die ("Connection failed: " . $conn->connect_error);
}
echo "Connected succesfully, now we will show the users.<br><br>";

$sql = "SELECT username, level FROM user";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  
  while($row = $result->fetch_assoc()) {
    echo "username: " . $row["username"]. " - level: " . $row["level"].  "<br>";
  }
} else {

  echo "0 results";
}

$conn->close();

?>