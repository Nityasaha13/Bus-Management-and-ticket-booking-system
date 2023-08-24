<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Welcome to MyBus - Home</title>
   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="css/find_bus.css">
   
   
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
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
</head>
<body>
<!-- header section starts  -->
<section class="header">
   <a href="home.php" class="logo"><img src="images/bus logo.jpg" height=80 width=120></a>
   <nav class="navbar">
      <a href="home.php" class="active">home</a>
      <a href="about.php">about</a>
      <a href="package.php">Timing</a>
      <a href="book.php">book</a>
	  <a href="#" data-toggle="modal" data-target="#myModal"><i class="fas fa-sign-in-alt" style="margin-right: 0.4rem;"></i>Admin</a>
   </nav>
   <div id="menu-btn" class="fas fa-bars"></div>
</section>
 
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
            <script>setTimeout(function(){window.location.href ="home.php";}, 3000);
            </script>
            <?php
    }
}
?>

<!-- header section ends -->
<!-- home section starts  -->
<section class="home">
   <div class="swiper home-slider">
      <div class="swiper-wrapper">
         <div class="swiper-slide slide" style="background:url(images/busani2.png) no-repeat">
            <div class="content">
               <span>Search, Choose, Book</span>
               <h3 style="color:black; font-family:roboto">Plan Your Journey in Your Own Way</h3>
               <a href="package.php" class="btn">See more</a> 
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(images/bus9.jpg) no-repeat">
            <div class="content">
               <span>Find and Book a Public Bus</span>
               <h3>Reach your destination effortlessly</h3>
               <a href="package.php" class="btn">See more</a>
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(images/bus1.jpg) no-repeat">
            <div class="content">
               <span>Book your Personal Bus NOW</span>
               <h3>make your journey peaceful</h3>
               <a href="package.php" class="btn">See more</a>
            </div>
         </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
   </div>
</section>
<!-- home section ends -->
<!-- services section starts  -->
<section class="services">
   <h1 class="heading-title"> Why Us </h1>
   <div class="box-container">
      <div class="box">
         <img src="images/support.png">
         <h3>Excelent Service</h3>
      </div>
      <div class="box">
         <img src="images/fast.png">
         <h3>Fast</h3>
      </div>
      <div class="box">
         <img src="images/quality.png">
         <h3>Quality travel</h3>
      </div>
      <div class="box">
         <img src="images/secure.png">
         <h3>Secure</h3>
      </div>
      
   </div>

</section>

<section class="home-about">
   <div class="image">
      <img src="images/bus30.png" alt="">
   </div>
   <div class="content">
      <h3>Book Your Private Bus</h3>
      <p>You can book your own bus with us. If you have any function, trip, personal travel you can checkout our servises. You will never regret, every journey is happy! myBus😄</p>
      <a href="privet.php" class="btn">Check</a>
   </div>
</section>
<!-- services section ends -->
<!-- home about section starts  -->
<section class="home-about">
   <div class="image">
      <img src="images/bus10in.jpg" alt="">
   </div>
   <div class="content">
      <h3>about us</h3>
      <p>Book your bus tickets with us today and experience a hassle-free travel experience. With our easy-to-use platform and wide selection of routes and schedules. Our commitment to excellent customer service ensures that you can travel with confidence and focus on enjoying your trip. Trust us to be your go-to platform for all your bus travel needs.</p>
      <a href="about.php" class="btn">read more</a>
   </div>
</section>
<!-- home about section ends -->



<section class="partner">
   <h1 class="heading-title"> our partners </h1>
   <div class="box-container">
      <div class="partner">
         <img src="images/sp1.png" alt="">
      </div>
      <div class="partner">
         <img src="images/sp2.png" alt="">
      </div>
      <div class="partner">
         <img src="images/sp3.png" alt="">
      </div>
      <div class="partner">
         <img src="images/sp4.png" alt="">
      </div>
      <div class="partner">
         <img src="images/sp5.png" alt="">
      </div>
   </div>
</section>


<!-- home offer section starts  -->
<section class="home-offer home-packages">
   <div class="content">
      <div class="offerimage">
      <img src="images/bus4.jpg">
      </div>
   </div>
   <div class="content">
      <h3>upto 40% off</h3>
      <p>Welcome to our bus ticket booking website! We're excited to offer you an incredible deal that you won't find anywhere else. If you're a first-time user, you can receive a whopping 40% off on your next ticket booking with us! That's right, just for choosing our website for your first booking.</p>
	  <p>So, don't wait any longer. Book your first bus ticket with us today and take advantage of our unbeatable offer. We guarantee that you won't regret it!</p>
      <a href="book.php" class="btn">book now</a>
   </div>
</section>
<!-- home offer section ends -->

<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>
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
</body>
</html>