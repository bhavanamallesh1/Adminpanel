<?php
$id = $_GET['id'];
include("database.php");
// Assuming you have a database connection and the necessary query
$sql = "SELECT * FROM teamlogin WHERE username = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

// Prepare the response array
$response = array(
  'username' => $row['username'],
  'email' => $row['email'],
  'password' => $row['password'],
  'contact' => $row['contact']
);

// Send the response as JSON
header('Content-Type: application/json');
echo json_encode($response);
exit; // Terminate the script after sending the response
?>