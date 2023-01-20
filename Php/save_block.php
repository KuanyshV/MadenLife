<?php
session_start();
include 'db.php';
$user_id = $_SESSION['user_id'];
$challenges_id = $_GET['challenges_id'];
$sql = "INSERT INTO block (customer_id, challenges_id)
VALUES ($user_id, $challenges_id)";

if ($connection->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $connection->error;
}
      $previousPage = '../challenges.html';
  header('Location: '.$previousPage);
?>