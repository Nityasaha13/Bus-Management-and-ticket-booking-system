<?php
// Connect to the database
$connection = mysqli_connect('localhost', 'root', '', 'book_db');

// Check for connection errors
if (mysqli_connect_errno()) {
  die('Failed to connect to database: ' . mysqli_connect_error());
}

// Check if the form was submitted
if (isset($_POST['id'])) {
  $id = $_POST['id'];
  
  // Delete the bus from the database
  $query = "DELETE FROM bus_list WHERE id='$id'";
  mysqli_query($connection, $query);
  
  // Redirect back to the bus list page
  header('Location: admin.php');
  exit;
}

// Close the database connection
mysqli_close($connection);
?>
