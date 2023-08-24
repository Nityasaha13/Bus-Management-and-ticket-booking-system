<?php
if (isset($_POST['bus_number']) && isset($_POST['date'])) {
   $bus_num = $_POST['bus_number'];
   $date = $_POST['date'];

   $connection = mysqli_connect('localhost', 'root', '', 'book_db');

   // Query to check the weekday of the entered bus number
   $query1 = "SELECT weekday FROM bus_list WHERE bus_no = '$bus_num'";
   $resultA = mysqli_query($connection, $query1);

   if ($resultA) {
      $row = mysqli_fetch_assoc($resultA);
      $weekday = $row['weekday'];
      $weekdayname = date('l', strtotime($date)); // Get the weekday name of the entered date

      $response = array();
      $response['weekdaysMatch'] = ($weekday == $weekdayname);

      header('Content-Type: application/json');
      echo json_encode($response);
   }
}
?>
