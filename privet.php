<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Book your privet bus with myBus</title>

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

</head>
<body>
   
<!-- header section starts  -->

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
            <script>setTimeout(function(){window.location.href ="about.php";}, 3000);
            </script>
            <?php
    }
}
?>

<section class="header">

   <a href="home.php" class="logo"><img src="images/bus logo.jpg" height=80 width=120></a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">Timing</a>
      <a href="book.php">book</a>
	  <a href="#" data-toggle="modal" data-target="#myModal"><i class="fas fa-sign-in-alt" style="margin-right: 0.4rem;"></i>Admin</a>
      
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- packages section starts  -->

<section class="packages">

   <h1 class="heading-title">Available Buses</h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/bus1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Bus No: BP01</h3>
            <p>Enjoy The Cool Ride</p>
            <h2>₹1500/- per day</h2>
            <a href="privet_book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/bus2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Bus No: BP02</h3>
            <p>Let's ride on this</p>
            <h2>₹1200/- per day</h2>
            <a href="privet_book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/bus34.jpeg" alt="">
         </div>
         <div class="content">
            <h3>Bus No: BP03</h3>
            <p>Enjoy the journey with unforgettable fun</p>
            <h2>₹1400/- per day</h2>
            <a href="privet_book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/bus32.jpg" alt="">
         </div>
         <div class="content">
            <h3>Bus No:BP04</h3>
            <p>Enjoy the journey with unforgettable fun</p>
            <h2>₹2000/- per day</h2>
            <a href="privet_book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/bus31.jpeg" alt="">
         </div>
         <div class="content">
            <h3>Bus No:BP05</h3>
            <p>Enjoy the Travel</p>
            <h2>₹1800/- per day</h2>
            <a href="privet_book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/bus29.jpg" alt="">
         </div>
         <div class="content">
            <h3>Bus No:BP06</h3>
            <p>Enjoy the ride with unforgettable fun</p>
            <h2>₹1500/- per day</h2>
            <a href="privet_book.php" class="btn">book now</a>
         </div>
      </div> 
</section>
<!-- packages section ends -->
<!-- footer section starts  -->
<section class="footer">
   <div class="box-container">
      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
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

</body>
</html>