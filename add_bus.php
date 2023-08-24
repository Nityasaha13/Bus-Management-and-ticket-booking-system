<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_db";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['add_bus'])) {
    // Get the data from the form
    $id = $_POST['id'];
    $bus_name = $_POST['bus_name'];
    $bus_no = $_POST['bus_no'];
    $seat_capacity = $_POST['seat_capacity'];
    $weekday = $_POST['weekday'];
    $time = $_POST['time'];
    $departure = $_POST['departure'];
    $destination = $_POST['destination'];
    $cost = $_POST['cost'];

    // Insert the data into the database
    $sql = "INSERT INTO bus_list (bus_name,bus_no,seat_capacity,weekday,time,departure,destination,cost) VALUES ('$bus_name','$bus_no','$seat_capacity','$weekday','$time','$departure','$destination','$cost')";

    mysqli_query($conn, $sql);
	session_start();
      $_SESSION['success_message'] = "Data Added Successfully.";
      header('location:admin.php'); 

   }else{
      echo 'something went wrong please try again!';
   }


mysqli_close($conn);
?>
