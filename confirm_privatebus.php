<?php

   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $bus_num = $_POST['bus_number'];
	  $date = $_POST['date'];
      $days = $_POST['days'];
      $reason = $_POST['reason'];

      $request = " insert into privet_bookings(name, email, phone, address, bus_num, date, days, reason) values('$name','$email','$phone','$address','$bus_num','$date','$days','$reason') ";
      mysqli_query($connection, $request);
     
	  
       if ($request) {
        echo "Confirmation Email Send after approved.";
    } else {
        echo "Error: " . mysqli_error($connection);
    }

   }else{
      echo 'something went wrong please try again!';
   }
mysqli_close($connection);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Private Bus Booked</title>
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
  <h1>myBus Booked</h1>
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
        <td>Days</td>
        <td><?php echo $days; ?></td>
      </tr>
	  
	  <tr>
        <td>Payment</td>
        <td>Not done</td>
      </tr>

  </table>

  <button onclick="window.print()" class="btn">Print</button>
  <a href="privet_book.php" class="btn" style="margin-right: 10px;">Back</a>
</div>
 

 
 </body>
</html>