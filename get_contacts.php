<?php
// Connect to the database
$conn = mysqli_connect('localhost', 'id21003677_test1', 'Test@321', 'id21003677_test1');

// Check connection
if (mysqli_connect_errno()) {
  die('Database connection failed: ' . mysqli_connect_error());
}

// Fetch all contacts
$sql = "SELECT * FROM contacts";
$result = mysqli_query($conn, $sql);

$contacts = array();
while ($row = mysqli_fetch_assoc($result)) {
  $contacts[] = $row;
}

// Convert the contacts array to JSON and send the response
header('Content-Type: application/json');
echo json_encode($contacts);

// Close the database connection
mysqli_close($conn);
?>
