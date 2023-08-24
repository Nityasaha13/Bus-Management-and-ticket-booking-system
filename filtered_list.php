<html>
<head>
<title>Filtered bus list</title>
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
  text-align: left;
  padding: 8px;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: tomato;
  color: #333;
}
.button-container {
  display: flex;
  justify-content: center;
}
h1{
	text-align:center;
}

</style>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<h1 style="color:red; font-family:Times new roman; font-size:40px; margin-bottom:10px;">Avaliable Buses</h1>
<?php

// Create connection to the database
$conn = new mysqli('localhost', 'root', '', 'book_db');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
	// Retrieve the selected weekday from the form data
	$weekday = $_POST['weekday'];
}

// SQL query to select records where weekday is "sunday"
$sql = "SELECT * FROM bus_list WHERE weekday = '$weekday'";

// Execute the query
$result = $conn->query($sql);

// Check if there are any records matching the query

if ($result->num_rows > 0) {
    // Loop through each record and print the details
	
	echo "<table>";
    echo "<tr><th>Bus Name</th><th>Bus Number</th><th>Seat Capacity</th><th>Weekday</th><th>Time</th><th>Departure</th><th>Destination</th><th>Ticket</th></tr>";
    
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

?>
<div class="button-container">
  <a href="bus details.php" class="btn">Back</a>
  <button onclick="window.print()" class="btn">Print</button>
</div>
</body>
</html>
