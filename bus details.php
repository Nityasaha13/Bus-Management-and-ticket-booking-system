<!DOCTYPE html>
<html>
<head>
  <title>Bus List</title>
  <link rel="stylesheet" type="text/css" href="css/bus details.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  
 
<style>
   select{
  font-size: 16px;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  background-color: #f2f2f2;
  color: #333;
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
}
label{
font-size: 16px;
border-radius: 4px;

}

select:hover, select:focus {
  background-color: #ddd;
  outline: none;
}

</style>
 
</head>
<body>
  <h1 style="color:red; font-family:times new roman; font-size:40px; margin-bottom:10px;">List of all Buses</h1>
 
	<form method="POST" action="filtered_list.php">
	<label for="weekday">Select a weekday:</label>
	<select name="weekday" id="weekday">
		<option value="all" selected>all</option>
		<option value="sunday">Sunday</option>
		<option value="monday">Monday</option>
		<option value="tuesday">Tuesday</option>
		<option value="wednesday">Wednesday</option>
		<option value="thursday">Thursday</option>
		<option value="friday">Friday</option>
		<option value="saturday">Saturday</option>
	</select>
	<button type="submit" name="submit" class="btn">Submit</button>
</form>

	
  
  <?php
 
    // Connect to the database
    $connection = mysqli_connect('localhost', 'root', '', 'book_db');

    // Check for connection errors
    if (mysqli_connect_errno()) {
      die('Failed to connect to database: ' . mysqli_connect_error());
    }

    // Query the bus_list table
    $query = "SELECT * FROM bus_list";
    $result = mysqli_query($connection, $query);

    // Display the table data
    echo "<table>";
    echo "<tr><th>Bus Name</th><th>Bus Number</th><th>Seat Capacity</th><th>Weekday</th><th>Time</th><th>Departure</th><th>Destination</th><th>Ticket Price</th></tr>";
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
      echo "</tr>";
    }
    echo "</table>";

    // Close the database connection
    mysqli_close($connection);
  
  ?>
  <div class="heading">
  <a href="package.php" class="btn" style="margin-right: 10px;">Back</a>
  <a href="home.php" class="btn" style="margin-right: 10px;">Home</a>
  <a href="book.php" class="btn" >Book now</a>
  <button onclick="window.print()" class="btn">Print</button>
  </div>
  
	
</body>
</html>
