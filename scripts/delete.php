<?php
$servername = "localhost";
$username = "catalystuser24";
$password = "downloud42";
$dbname = "chart_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$value = $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM patients WHERE id='$value'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header('Location: ../patients/index.php');
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>