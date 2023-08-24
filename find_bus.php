<!DOCTYPE html>
<html>
<head>
	<title>Search Your Bus</title>
	<link rel="stylesheet" type="text/css" href="css/user_history.css">
	<link rel="stylesheet" type="text/css" href="css/find_bus.css">
	<script src="js/find_bus.js"></script>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	
	<style>
table {
  border-collapse: collapse;
  width: 80%;
  max-width: 1200px;
  margin: auto;
  background-color: aqua;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
  font-width:bold;
  padding: 10px;
}

th, td {
  text-align: center;
  padding: 8px;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: tomato;
  color: #333;
}
div{
	display:flex;
	margin:5px;
	justify-content:center;
}

</style>
	
</head>
<body>

<section class="header">

   <a href="home.php" class="logo"><img src="images/bus logo.jpg" height=80 width=120></a>

   <nav class="navbar">
      <a href="package.php" class="btn">Back</a>
  
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

     
	<br> 
	<h1>Enter the Followings</h1>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		<label for="departure"><strong>Departure:<strong></label>
		<input type="text" id="departure" name="departure" required>
	<label for="destination"><strong>Destination:</strong></label>
	<input type="text" id="destination" name="destination" required>

	<nobr><button type="submit" name="find-bus">Find Buses</button>
	<button id="reset-btn" type="reset">Re-enter</button></nobr>
</form>
<div>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['find-bus']))  {
	// Retrieve data
	$departure = $_POST['departure'];
	$destination = $_POST['destination'];

	// Create connection to the database
	$conn = new mysqli('localhost', 'root', '', 'book_db');

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	// SQL query to select records where departure and destination match
	$sql = "SELECT * FROM bus_list WHERE departure = '$departure' and destination='$destination'";

	// Execute the query
	$result = $conn->query($sql);

	// Check if there are any records matching the query
	if ($result->num_rows > 0) {
		// Loop through each record and print the details
		echo "<table>";
		echo "<tr><th>Bus Name</th><th>Bus Number</th><th>Seat Capacity</th><th>Weekday</th><th>Time</th><th>Departure</th><th>Destination</th><th>Ticket Price</th></tr>";
		while($row = $result->fetch_assoc()) {
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
	} else {
		echo "No records found matching the criteria.";
	}

	// Close the database connection
	$conn->close();
}
?>

</div>
</body>
</html>
