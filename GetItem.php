<?php

//variables connecting to DB
$servername= "localhost";
$username = "root";
$password = "";
$dbname = "unitybackendtutorial";

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  //variables submitted by user
  $itemID = $_POST["itemID"];
  
  $sql = "SELECT name, description, price FROM items WHERE ID = '" . $itemID . "'";
  
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    // output data of each row
    $rows = array();
    while($row = $result->fetch_assoc()) {
      $rows[] = $row;
    }
    // after the whole array is created
    echo json_encode($rows);
  } else {
    echo "0";
  }
  $conn->close();
  
  ?>