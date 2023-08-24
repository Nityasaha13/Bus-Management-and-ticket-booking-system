<!DOCTYPE html>
<html>
<head>
	<title>Browse History</title>
	
	<script src="js/find_bus.js"></script>
	<link rel="stylesheet" type="text/css" href="css/user_history.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/find_bus.css">
	   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	
</head>
<body>

<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo"><img src="images/bus logo.jpg" height=80 width=120></a>

   <nav class="navbar">
      <a href="book.php" class="btn">Back</a>
  
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends   -->

<div class="find-user">
	<br>
	<h1>Enter Your Details</h1>
	
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		<label for="name"><strong>Name:<strong></label>
		<input type="text" id="namef" name="namef" required>
		<label for="email"><strong>Email:<strong></label>
		<input type="text" id="emailf" name="emailf" required>
		<label for="phone"><strong>Phone no.:</strong></label>
		<input type="text" id="phonef" name="phonef" required>

	<nobr><button type="submit" name="sendotp">Send OTP</button>
	<button id="reset-btn" type="reset">Re-enter</button></nobr>
</form>

</div>



<div class="work-user">
<?php
 
    // Connect to the database
    $connection = mysqli_connect('localhost', 'root', '', 'book_db');

    // Check for connection errors
    if (mysqli_connect_errno()) {
      die('Failed to connect to database: ' . mysqli_connect_error());
    }
	
// Check if the form was submitted
	if (isset($_POST['edit_booking'])) {
	
	$id = $_POST['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$bus_number = $_POST['bus_number'];
	$date = $_POST['date'];
	$departure = $_POST['departure'];
	$destination = $_POST['destination'];

// Update the booking in the database
   $query = "UPDATE book_form SET name='$name', email='$email', phone='$phone', address='$address', bus_number='$bus_number', date='$date', departure='$departure', destination='$destination' WHERE id='$id'";
	
	mysqli_query($connection, $query);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['sendotp']))  {
	
    $emailf=$_POST['emailf'];
	$phonef = $_POST['phonef'];

    // Query the bus_list table
    $query = "SELECT * FROM book_form where email='$emailf' and phone='$phonef'";
    $result = mysqli_query($connection, $query);
   
   // Display the table data
  if($result->num_rows>0){
    echo "<table>";
    echo "<tr><th>Name</th><th>Email</th><th>Phone No.</th><th>Address</th><th>Bus Number</th><th>Date</th><th>Departure</th><th>Destination</th><th>Edit/Delete</th></tr>";
    while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row['name'] . "</td>";
	  echo "<td>" . $row['email'] . "</td>";
      echo "<td>" . $row['phone'] . "</td>";
	  echo "<td>" . $row['address'] . "</td>";
      echo "<td>" . $row['bus_number'] . "</td>";
	  echo "<td>" . $row['date'] . "</td>";
      echo "<td>" . $row['departure'] . "</td>";
      echo "<td>" . $row['destination'] . "</td>";
	  echo "<td><button class='edit-button' data-id='" . $row['id'] . "'>edit</button><button class='delete-button' data-id='" . $row['id'] . "'>delete</button></td>";
      echo "</tr>";
    }
    echo "</table>";
  }else{
	  echo "Sorry, no bookings found.";
  }
    // Close the database connection
    mysqli_close($connection);
}
  ?>
  
 <div id="edit-form-container" style="display:none;text-align:center;background-color:#f2f2f2">
  <form id="edit-form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <h2>Edit Bookings Details</h2>
    <input type="hidden" name="id" id="edit-id" value="">
    <label>Name:</label>
    <input type="text" name="name" id="edit-name"><br>
    <label>Email:</label>
    <input type="text" name="email" id="edit-email"><br>
    <label>Phone:</label>
	<input type="number" name="phone" id="edit-phone"><br>
	<label>Address:</label>
	<input type="text" name="address" id="edit-address"><br>
	<label>Bus No:</label>
    <input type="text" name="bus_number" id="edit-bus-no"><br>
	<label>Date:</label>
	<input type="text" name="date" id="edit-date"><br>
	<label>Departure:</label>
	<input type="text" name="departure" id="edit-departure"><br>
	<label>Destination:</label>
	<input type="text" name="destination" id="edit-destination"><br>
	
	<button type="submit" name="edit_booking">Update</button>
	<button type="button" class="cancel-button">Cancel</button>
  </form>
</div>
  
  
  <div id="delete-confirmation-container" style="display:none;text-align:center;background-color:#f2f2f2;">
  <h2>Confirm Deletion</h2>
  <p>Are you sure you want to delete this bus?</p>
  <button id="confirm-delete-button">Yes</button>
  <button class="cancel-button">No</button>
  </div>
  
 </div> 
  
<script type="text/javascript">
$(document).ready(function() {
	
	// Edit button click handler
    $('.edit-button').click(function() {
      var id = $(this).data('id');
      var name = $(this).parent().siblings().eq(0).text();
      var email = $(this).parent().siblings().eq(1).text();
      var phone = $(this).parent().siblings().eq(2).text();
      var address = $(this).parent().siblings().eq(3).text();
	  var bus_number = $(this).parent().siblings().eq(4).text();
	  var date = $(this).parent().siblings().eq(5).text();
      var departure = $(this).parent().siblings().eq(6).text();
      var destination = $(this).parent().siblings().eq(7).text();

      // Populate the edit form fields with the selected bus's data
      $('#edit-id').val(id);
      $('#edit-name').val(name);
      $('#edit-email').val(email);
      $('#edit-phone').val(phone);
      $('#edit-address').val(address);
      $('#edit-bus-no').val(bus_number);
	  $('#edit-date').val(date);
      $('#edit-departure').val(departure);
      $('#edit-destination').val(destination);


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
        url: 'delete_booking.php',
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
