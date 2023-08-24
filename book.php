
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Book your ticket with MyBus</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script>
      $(document).ready(function(){
          $(".scroll-top").click(function() {
              $("html, body").animate({ 
                  scrollTop: 0 
              }, "slow");
              return false;
          });
      });
   </script>
   
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/find_bus.css">

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script>
      $(document).ready(function(){
         // Function to handle the AJAX request
         function getPrice() {
            var departure = $("#departure").val();
            var destination = $("#destination").val();

            $.ajax({
               url: "get_price_for_submitbutton_bookpageform.php", // The file that retrieves the price from the database
               type: "POST",
               data: { departure: departure, destination: destination },
               success: function(response) {
                  $(".price").text(response); // Update the price element with the retrieved value
               }
            });
         }

         // Event handler for departure and destination change  #departure,
         $("#destination").change(function() {
            getPrice();
         });
      });
   </script>



</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo"><img src="images/bus logo.jpg" height=80 width=120></a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">Timing</a>
      <a href="book.php" class="active">book</a>
	  <a href="#" data-toggle="modal" data-target="#myModal"><i class="fas fa-sign-in-alt" style="margin-right: 0.4rem;"></i>Admin</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!--modal form--> 
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		<h1>Login As Admin</h1>
		<label for="username"><strong>Username:<strong></label>
		<input type="text" id="username" name="username" required>
		<label for="password"><strong>Password:</strong></label>
		<input type="text" id="password" name="password" required>

		<nobr><button onclick="login()" type="submit" class="btn btn-success" name="submita">Login</button>
        <button type="button" class="btn btn-danger " data-dismiss="modal">Close</button></nobr>
	</form>
  </div>
</div>


<?php

if(isset($_POST['submita']))
{   
    if($_POST['password'] == "Admin" && $_POST['username']=="Admin")
    {
        $_SESSION['loggedin'] = True;
        echo "Valid User";?>
        <script>setTimeout(function(){window.location.href ="dashboard.php";}, 100);
        </script>
        <?php
    }
    else
    {
            echo "Requires valid Authentication to log in";?>
            <script>setTimeout(function(){window.location.href ="book.php";}, 3000);
            </script>
            <?php
    }
}
?>


<div class="heading" style="background:url(images/bus12.webp) no-repeat">
   <h1 style="font-size:50px;">View / Edit your bookings </h1>
   <a href="user_history.php" class="btn">Click here</a>
</div>


<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">book your ticket now</h1>
   
<form action="book_form.php" method="post" class="book-form">

  <div class="flex">
     <div class="inputBox">
        <span>name :</span>
        <input type="text" placeholder="enter your name" name="name" required>
     </div>
     <div class="inputBox">
        <span>email :</span>
        <input type="email" placeholder="enter your email" name="email" required>
     </div>
     <div class="inputBox">
        <span>phone :</span>
        <input type="number" placeholder="enter your number" name="phone" required>
     </div>
     <div class="inputBox">
        <span>address :</span>
        <input type="text" placeholder="enter your address" name="address">
     </div>
     <div class="inputBox">
        <span>Bus Number :</span>
        <input list="bus_no" name="bus_number" placeholder="enter bus number" required>
        <?php
        $connection = mysqli_connect('localhost', 'root', '', 'book_db');
        $query = "SELECT bus_no FROM bus_list";
        $result = mysqli_query($connection, $query);
        ?>
        <datalist id="bus_no">
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <option value="<?php echo $row['bus_no']; ?>">
        <?php } ?>
     </datalist>
     </div>
     
	 <div class="inputBox">
         <span>Date :</span>
         <input type="date" name="date" placeholder="Date" required onchange="checkWeekday()">
         <span id="date-error" style="color: red;"></span>
         <input type="hidden" id="weekday-check-url" value="check_weekday.php">
      </div>
  
    <div class="inputBox">
    <span>departure :</span>
    <input list="departure" placeholder="start from" name="jstart" required id="departure">
        <?php
        $query = "SELECT departure FROM bus_list";
        $result = mysqli_query($connection, $query);
        ?>
    <datalist id="departure">
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <option value="<?php echo $row['departure']; ?>">
        <?php } ?>
    </datalist>
    </div>

     <div class="inputBox">
        <span>destination :</span>
        <input list="destination" placeholder="enter destination" name="jend" required id="destination">
            <?php
            $query = "SELECT destination FROM bus_list";
            $result = mysqli_query($connection, $query);
            ?>
        <datalist id="destination">
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <option value="<?php echo $row['destination']; ?>">
            <?php } ?>
        </datalist>    
     </div>
     
     <!--print price-->
        <div class="inputBox">
           <span>Price :</span>
           <span class="price" style="font-weight: bold; font-size: 20px; color: red;"></span>

        </div>

           
  </div>
  
  <input type="submit" value="Pay" class="btn" name="send" style="margin-left:45%;">

</form>

   
</section>
<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>
<!-- booking section ends -->


<!-- footer section starts  -->
<section class="footer">
   <div class="box-container">
      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> time schedule</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>
      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
      </div>
      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +918158957656 </a>
         <a href="#"> <i class="fas fa-phone"></i> 1800 457 947</a>
         <a href="#"> <i class="fas fa-envelope"></i> nityasaha39@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Raiganj, West Bengal - 733134  </a>
      </div>
      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
      </div>
   </div>
   <div class="credit"> designed by <span>Team NextGen RGU</span> | all rights reserved! </div>
</section>

<!-- footer section ends -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>


<script>
   function checkWeekday() {
      const dateInput = document.getElementsByName("date")[0];
      const busNumberInput = document.getElementsByName("bus_number")[0];
      const url = document.getElementById("weekday-check-url").value;
      const errorSpan = document.getElementById("date-error");

      // Clear any previous error messages
      errorSpan.textContent = "";

      // Check if the selected date is a previous date
      const selectedDate = new Date(dateInput.value);
      const currentDate = new Date();

      if (selectedDate < currentDate) {
         errorSpan.textContent = "Choose a future date";
         return;
      }

      // Create a FormData object to send the selected date and bus number to the server
      const formData = new FormData();
      formData.append("date", dateInput.value);
      formData.append("bus_number", busNumberInput.value);

      // Send a POST request to the PHP script for weekday comparison
      fetch(url, {
         method: "POST",
         body: formData,
      })
         .then((response) => response.json())
         .then((data) => {
            if (data.weekdaysMatch) {
               // Weekdays match, clear error message
               errorSpan.textContent = "";
            } else {
               // Weekdays don't match, display error message
               errorSpan.textContent = "Choose the correct date";
            }
         })
         .catch((error) => {
            console.error("Error:", error);
         });
   }

   function submitForm(event) {
      const dateInput = document.getElementsByName("date")[0];
      const errorSpan = document.getElementById("date-error");

      // Check if there is an error message
      if (errorSpan.textContent !== "") {
         // Prevent form submission
         event.preventDefault();
         // Optionally, you can scroll to the date input for better visibility of the error message
         dateInput.scrollIntoView();
      }
   }
</script>


</body>
</html>