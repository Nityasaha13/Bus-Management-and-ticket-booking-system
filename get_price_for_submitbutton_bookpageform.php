<?php
$connection = mysqli_connect('localhost', 'root', '', 'book_db');

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['departure']) && isset($_POST['destination'])) {
   $departure = $_POST['departure'];
   $destination = $_POST['destination'];

   $query = "SELECT cost FROM bus_list WHERE departure = '$departure' AND destination = '$destination'";
   $result = mysqli_query($connection, $query);

   if ($result && mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      echo $row['cost'];
   } else {
      echo "Bus not found";
   }
} else {
   echo "Invalid request";
}

mysqli_close($connection);
?>
