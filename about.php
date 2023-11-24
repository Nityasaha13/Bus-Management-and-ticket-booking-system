<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>MyBus About</title>

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

<section class="header">

   <a href="home.php" class="logo"><img src="images/bus logo.jpg" height=80 width=120></a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php" class="active">about</a>
      <a href="package.php">Timing</a>
      <a href="book.php">book</a>
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
            <script>setTimeout(function(){window.location.href ="about.php";}, 3000);
            </script>
            <?php
    }
}
?>



<div class="heading" style="background:url(images/bus11.jpg) no-repeat">
   <h1>about us</h1>
</div>


<!-- about section starts  -->

<section class="about">

   <div class="image">
      <img src="images/bus24.jpg" alt="">
   </div>

   <div class="content">
      <h3>why choose us?</h3>
      <p>Our bus booking website is dedicated to providing a simple and efficient solution for booking bus tickets.</p>
	  <p>We pride ourselves on excellent customer service, and our team is always ready to assist with any queries to ensure a hassle-free travel experience. Trust us to be your go-to platform for all your bus travel needs.</p>
     <div class="icons-container">
         <div class="icons">
            <i class="fas fa-bus"></i>
            <span>quality buses</span>
         </div>
         <div class="icons">
            <i class="fas fa-headset"></i>
            <span>24/7 service</span>
         </div>
         <div class="icons">
            <i class="fas fa-hand-holding-usd"></i>
            <span>reasonable price</span>
         </div>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading-title"> Our Team </h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">
	  
		 <div class="swiper-slide slide">
            
            <p>Nitya Gopal Saha is a very dedicated member of this team, overseeing the entire bus management system project.</p>
            <h3>Team Member</h3>
            <span></span>
            <img src="images/nitya.jpg" alt="">
         </div>

         <div class="swiper-slide slide">
            <p>Ananya Saha gives assistance for documentation, designing, and database in the "Bus Management System" project.</p>
            <h3>Team Member</h3>
            <span></span>
            <img src="images/ankhi.jpg" alt="">
         </div>

      </div>

   </div>

</section>

<section class="booking" style="background-color: #f2f2f2; padding: 50px">

    <div class="flex">
        <h1 style="font-size: 30px; margin-bottom: 10px;">Contact Us</h1>
        <form action="" method="post" class="book-form" style="max-width: 500px;">
            <div class="inputBox" style="margin-bottom: 10px;">
                <span style="display: block; font-size: 15px; font-weight: 600; margin-bottom: 5px;">Name</span>
                <input type="text" name="name" id="name" style="width: 100%; padding: 10px; border: none; border-radius: 5px; background-color: #fff; box-shadow: 0px 0px 5px #ccc;" required>
            </div>
            <div class="inputBox" style="margin-bottom: 10px;">
                <span style="display: block; font-size: 15px; font-weight: 600; margin-bottom: 5px;">Email Address</span>
                <input type="email" name="email" id="email" style="width: 100%; padding: 10px; border: none; border-radius: 5px; background-color: #fff; box-shadow: 0px 0px 5px #ccc;" required>
            </div>
            <div class="inputBox" style="margin-bottom: 10px;">
                <span style="display: block; font-size: 15px; font-weight: 600; margin-bottom: 5px;">Message</span>
                <textarea name="message" id="message" cols="30" rows="10" style="width: 100%; padding: 10px; border: none; border-radius: 5px; background-color: #fff; box-shadow: 0px 0px 5px #ccc;"></textarea>
            </div>
			<input type="submit" value="submit" class="btn" name="send">
        </form>
    </div>
	
	<?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
      <div class="success-message" style="margin-bottom: 20px;font-size: 20px;color: green;"><?php echo $_SESSION['success_message']; ?></div>
      <?php
      unset($_SESSION['success_message']);
   }
   ?>
	
</section>


<!-- reviews section ends -->
<!-- footer section starts  -->
<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>

<section class="footer">
   <div class="box-container">
      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> time schedule</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> booking</a>
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



<?php
   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];

      $request = " insert into contact_us(name, email, message) values('$name','$email','$message') ";
      mysqli_query($connection, $request);
      session_start();
      $_SESSION['success_message'] = "Message sent successfully.";
      booking('location:about.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>


<!-- footer section ends -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
