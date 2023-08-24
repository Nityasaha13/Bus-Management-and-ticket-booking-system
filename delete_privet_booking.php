<?php
// Connect to the database
$connection = mysqli_connect('localhost', 'root', '', 'book_db');

// Check for connection errors
if (mysqli_connect_errno()) {
  die('Failed to connect to database: ' . mysqli_connect_error());
}

// Get the booking id from the AJAX request
$id = $_POST['id'];

// Delete the booking from the book_form table
$query = "DELETE FROM privet_bookings WHERE id = $id";
mysqli_query($connection, $query);

// Close the database connection
mysqli_close($connection);
?>
