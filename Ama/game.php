<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "EnglishHub";

session_start();

$user_check = $_SESSION['login_user'];
$points = $_POST["txtpoints"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO sudoku (username, points)
VALUES ('$user_check', '$points')";

if ($conn->query($sql) === TRUE) {
  echo "Your marks added to the database successfully. You can view your history by clicking on 'My History'";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 