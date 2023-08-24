<?php
$connection = mysqli_connect('localhost', 'root', '', 'book_db');

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $bus_num = $_POST['bus_number'];
    $date = $_POST['date'];
    $jstart = $_POST['jstart'];
    $jend = $_POST['jend'];

    $request = "INSERT INTO book_form (name, email, phone, address, bus_number, date, departure, destination) VALUES ('$name','$email','$phone','$address','$bus_num','$date','$jstart','$jend')";
	
	$query1 = "SELECT time FROM bus_list WHERE bus_no = '$bus_num'";
	$resultA = mysqli_query($connection, $query1);
	
	
	
	if ($resultA){
      $row = mysqli_fetch_assoc($resultA);
      $time= $row['time'];
    }

    $result = mysqli_query($connection, $request);

    if ($result) {
        echo "Booked successfully.";
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}

mysqli_close($connection);
?>



<!DOCTYPE html>
<html>
<head>
	<title>Bus Ticket Confirmation</title>
	<style type="text/css">
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
		}
		.container {
			width: 40%;
			margin: 0 auto;
			background-color: #fff;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0px 0px 10px #ddd;
			margin-top: 50px;
		}
		h1 {
			font-size: 30px;
			color: #333;
			margin-bottom: 20px;
		}
		table {
			width: 60%;
			border-collapse: collapse;
		}
		th, td {
			padding: 8px;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}
		th {
			background-color: #f2f2f2;
		}
		.btn {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			font-size: 18px;
			cursor: pointer;
			margin-top: 20px;
			margin-bottom: 20px;
		}
	</style>
</head>
<body>

<div class="container">
  <h1>myBus Ticket Booked</h1>
  <table>
    
      <tr>
        <td>Name</td>
        <td><?php echo $name; ?></td>
      </tr>

      <tr>
        <td>Phone</td>
        <td><?php echo $phone; ?></td>
      </tr>

      <tr>
        <td>Bus Number</td>
        <td><?php echo $bus_num; ?></td>
      </tr

      <tr>
        <td>Date</td>
        <td><?php echo $date; ?></td>
      </tr>
	  
	  <tr>
	    <td>Time</td>
		<td><?php echo $time;  ?>
      </td>
	  </tr>

      <tr>
        <td>Departure</td>
        <td><?php echo $jstart; ?></td>
      </tr>

      <tr>
        <td>Destination</td>
        <td><?php echo $jend; ?></td>
      </tr>
	  <tr>
        <td>Payment</td>
        <td>success</td>
      </tr>
  </table>

  <button onclick="window.print()" class="btn">Print</button>
  <a href="book.php" class="btn" style="margin-right: 10px;">Back</a>
</div>
 

 
 </body>
</html>
