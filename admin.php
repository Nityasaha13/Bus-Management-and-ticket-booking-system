<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Public Bus Details</title>
  
  <link rel="stylesheet" type="text/css" href="css/user_history.css">
  <link rel="stylesheet" type="text/css" href="css/find_bus.css">
  
  <style>
  th,td{padding:2px 2px;}
  </style>
  
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
  <script>
		function showForm() {
			document.getElementById("formDiv").style.display = "block";
		}
	</script>
	
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <h1 style="font-family: Arial, sans-serif;padding: 10px;  text-align: center;color: green;">Manage or Delete Bus List</h1>
	<a href="dashboard.php" class="btn" style="margin-left:8%;display: inline-block; padding: 6px 14px; border: none; border-radius: 3px; font-size: 16px; color: #fff; background-color:tomato; text-decoration: none; cursor: pointer;">Back</a>
	<button style="margin:4px 4px 4px 4px; padding: 6px 14px; border: none; border-radius: 3px; font-size: 16px; color: #fff; background-color:green;" onclick="showForm()" data-toggle="modal" data-target="#myModal">Add Bus</button>
	
<div id="myModal" class="modal fade" role="dialog">
 <div class="modal-dialog">

	<div id="formDiv" style="display: none;">
		<form action="add_bus.php" method="post" style="padding:10px; text-align:center; background-color:#f2f2f2">
			<h1>Add Bus Details</h1>
			<input type="hidden" name="id" id="add-id" value="">
			<label>Bus Name:</label>
			<input type="text" name="bus_name" id="add-bus-name"><br>
			<label>Bus Number:</label>
			<input type="text" name="bus_no" id="add-bus-no"><br>
			<label>Seat Capacity:</label>
			<input type="text" name="seat_capacity" id="add-seat-capacity"><br>
			<label>Weekday:</label>
			<input type="text" name="weekday" id="add-weekday"><br>
			<label>Time:</label>
			<input type="text" name="time" id="add-time"><br>
			<label>Departure:</label>
			<input type="text" name="departure" id="add-departure"><br>
			<label>Destination:</label>
			<input type="text" name="destination" id="add-destination"><br>
			<label>Ticket Price:</label>
			<input type="text" name="cost" id="add-cost"><br>

			<input type="submit" value="Submit" name="add_bus" style="padding: 5px 5px; font-size:14px; border:none;border-radius:5px;background-color:#42f572;">
			<button type="button" class="btn btn-danger " data-dismiss="modal">Close</button>
		</form>
	</div>
</div>
</div>

<?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
      <div class="success-message" style="margin-bottom: 20px;font-size: 20px;color: green;"><?php echo $_SESSION['success_message']; ?></div>
      <?php
      unset($_SESSION['success_message']);
   }
   ?>

<?php
// Connect to the database
$connection = mysqli_connect('localhost', 'root', '', 'book_db');

// Check for connection errors
if (mysqli_connect_errno()) {
  die('Failed to connect to database: ' . mysqli_connect_error());
}

// Check if the form was submitted
if (isset($_POST['edit_bus'])) {
  $id = $_POST['id'];
  $bus_name = $_POST['bus_name'];
  $bus_no = $_POST['bus_no'];
  $seat_capacity = $_POST['seat_capacity'];
  $weekday = $_POST['weekday'];
  $time = $_POST['time'];
  $departure = $_POST['departure'];
  $destination = $_POST['destination'];
  $cost = $_POST['cost'];
  
  // Update the bus in the database
  $query = "UPDATE bus_list SET bus_name='$bus_name', bus_no='$bus_no', seat_capacity='$seat_capacity', weekday='$weekday', time='$time', departure='$departure', destination='$destination', cost='$cost' WHERE id='$id'";
  mysqli_query($connection, $query);
}

// Query the bus_list table
$query = "SELECT * FROM bus_list";
$result = mysqli_query($connection, $query);

// Display the table data
echo "<table>";
echo "<tr><th>Bus Name</th><th>Bus Number</th><th>Seat Capacity</th><th>Weekday</th><th>Time</th><th>Departure</th><th>Destination</th><th>Ticket Price</th><th>Edit/Delete</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
  echo "<td>" . $row['bus_name'] . "</td>";
  echo "<td>" . $row['bus_no'] . "</td>";
  echo "<td>" . $row['seat_capacity'] . "</td>";
  echo "<td>" . $row['weekday'] . "</td>";
  echo "<td>" . $row['time'] . "</td>";
  echo "<td>" . $row['departure'] . "</td>";
  echo "<td>" . $row['destination'] . "</td>";
  echo "<td>" . $row['cost'] . "</td>";
  echo "<td><button class='edit-button' data-id='" . $row['id'] . "'>edit</button><button class='delete-button' data-id='" . $row['id'] . "'>delete</button></td>";
  echo "</tr>";
}
echo "</table>";

// Close the database connection
mysqli_close($connection);
?>

<div id="edit-form-container" style="display:none;text-align:center;background-color:#f2f2f2">
  <form id="edit-form" method="post" action="">
    <h2>Edit Bus Details</h2>
    <input type="hidden" name="id" id="edit-id" value="">
    <label>Bus Name:</label>
    <input type="text" name="bus_name" id="edit-bus-name"><br>
    <label>Bus Number:</label>
    <input type="text" name="bus_no" id="edit-bus-no"><br>
    <label>Seat Capacity:</label>
	<input type="number" name="seat_capacity" id="edit-seat-capacity"><br>
	<label>Weekday:</label>
	<input type="text" name="weekday" id="edit-weekday"><br>
	<label>Time:</label>
	<input type="text" name="time" id="edit-time"><br>
	<label>Departure:</label>
	<input type="text" name="departure" id="edit-departure"><br>
	<label>Destination:</label>
	<input type="text" name="destination" id="edit-destination"><br>
	<label>Ticket Price:</label>
	<input type="number" name="cost" id="edit-cost"><br>
	
	<button type="submit" name="edit_bus">Update Bus</button>
	<button type="button" class="cancel-button">Cancel</button>
  </form>
</div>


<div id="delete-confirmation-container" style="display:none;text-align:center;background-color:#f2f2f2;">
  <h2>Confirm Deletion</h2>
  <p>Are you sure you want to delete this bus?</p>
  <button id="confirm-delete-button">Yes</button>
  <button class="cancel-button">No</button>
</div>

<script type="text/javascript">
  
  $(document).ready(function() {
    // Edit button click handler
    $('.edit-button').click(function() {
      var id = $(this).data('id');
      var bus_name = $(this).parent().siblings().eq(0).text();
      var bus_no = $(this).parent().siblings().eq(1).text();
      var seat_capacity = $(this).parent().siblings().eq(2).text();
      var weekday = $(this).parent().siblings().eq(3).text();
      var time = $(this).parent().siblings().eq(4).text();
      var departure = $(this).parent().siblings().eq(5).text();
      var destination = $(this).parent().siblings().eq(6).text();
      var cost = $(this).parent().siblings().eq(7).text();

      // Populate the edit form fields with the selected bus's data
      $('#edit-id').val(id);
      $('#edit-bus-name').val(bus_name);
      $('#edit-bus-no').val(bus_no);
      $('#edit-seat-capacity').val(seat_capacity);
      $('#edit-weekday').val(weekday);
      $('#edit-time').val(time);
      $('#edit-departure').val(departure);
      $('#edit-destination').val(destination);
      $('#edit-cost').val(cost);

      // Display the edit form
      $('#edit-form-container').show();
    });

    // Delete button click handler
    $('.delete-button').click(function() {
      var id = $(this).data('id');

      // Display the delete confirmation dialog
      $('#delete-confirmation-container').show();

      // Yes button click handler
      $('#confirm-delete-button').click(function() {
        // Send an AJAX request to delete the bus
        $.ajax({
          url: 'delete_bus.php',
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




