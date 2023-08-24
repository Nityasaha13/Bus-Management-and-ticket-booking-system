<!DOCTYPE html>
<html>
<head>
  <title>Manage Messages - admin</title>
  <link rel="stylesheet" type="text/css" href="css/user_history.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<h1>Manage or Delete Messages</h1>
<div class="heading">
  <a href="dashboard.php" class="btn" style="margin:4px 4px 4px 4px;display: inline-block; padding: 6px 14px; border: none; border-radius: 5px; font-size: 16px; color: #fff; background-color:tomato; text-decoration: none; cursor: pointer;margin-left:5%;">Back</a>
 </div>
	  
  <?php
    // Connect to the database
    $connection = mysqli_connect('localhost', 'root', '', 'book_db');

    // Check for connection errors
    if (mysqli_connect_errno()) {
      die('Failed to connect to database: ' . mysqli_connect_error());
    }
    // Query the bus_list table
    $query = "SELECT * FROM contact_us";
    $result = mysqli_query($connection, $query);

    // Display the table data
    echo "<table>";
    echo "<tr><th>Name</th><th>Email</th><th>Message</th><th>Delete</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $row['name'] . "</td>";
	  echo "<td>" . $row['email'] . "</td>";
      echo "<td>" . $row['message'] . "</td>";
	  echo "<td>  <button class='delete-button' data-id='" . $row['id'] . "'>delete</button> </td>";
      echo "</tr>";
    }
    echo "</table>";

    // Close the database connection
    mysqli_close($connection); 
  ?> 
  <div id="delete-confirmation-container" style="display:none;text-align:center;background-color:#f2f2f2;">
  <h2>Confirm Deletion</h2>
  <p>Are you sure you want to delete this bus?</p>
  <button id="confirm-delete-button">Yes</button>
  <button class="cancel-button">No</button>
  </div>
  
<script>
$(document).ready(function() {
  // Delete button click handler
  $('.delete-button').click(function() {
    var id = $(this).data('id');
    // Display the delete confirmation dialog
    $('#delete-confirmation-container').show();
    // Yes button click handler
    $('#confirm-delete-button').click(function() {
      // Send an AJAX request to delete the bus
      $.ajax({
        url: 'delete_messages.php',
        type: 'POST',
        data: { id: id },
        success: function() {
          // Reload the page to update the bus list
          location.reload();
        }
      });
    });

    // No button click handler
    $('.cancel-button').click(function() {
      // Hide the delete confirmation dialog
      $('#delete-confirmation-container').hide();
    });
  });

  // Cancel button click handler
  $('.cancel-button').click(function() {
    // Hide the edit form or delete confirmation dialog
    $('#edit-form-container').hide();
    $('#delete-confirmation-container').hide();
  });
});
</script>
	
</body>
</html>
