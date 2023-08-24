<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>About Project</title>  
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

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
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo"><img src="images/bus logo.jpg" height=80 width=120></a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">Timing</a>
      <a href="book.php">book</a>
	  <a href="MY_BUS Final Document.pdf"> Documentation</a>
	  <a href="about.php"> Back</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->


<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading-title"> Our Team </h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            
            <p>Nitya Gopal Saha is an student of Raiganj University [CIS department] who successfully completed the project "MyBus". The project aimed to design and implement a system that can manage the operations of a bus company, such as scheduling, ticketing, and tracking. Nitya [Roll: BCA2000030] demonstrated excellent skills in programming, database, and user interface design, as well as teamwork and communication.</p>
            <h3>Team Member</h3>
            <span></span>
            <img src="images/nitya.jpg" alt="">
         </div>

         <div class="swiper-slide slide">
            <p>Ananya Saha is gives assistance for documentation-related tasks, designing and database in the "Bus Management System" project. Ananya Saha is an student of Raiganj University [CIS department] who successfully completed the project "MyBus". The project aimed to design and implement a system that can manage the operations of a bus company, such as scheduling, ticketing, and tracking. Ananya [Roll: BCA2010009] demonstrated excellent skills in programming, database, and user interface design, as well as teamwork and communication..</p>
            <h3>Team Member</h3>
            <span></span>
            <img src="images/ankhi.jpg" alt="">
         </div>

         <div class="swiper-slide slide">
        
            <p>Santosh Roy a very dedicated member of this team, overseeing the bus management system project with designing, coding, and contact management, ensuring its success from start to finish. Santosh Roy is an student of Raiganj University [CIS department] who successfully completed the project "MyBus". The project aimed to design and implement a system that can manage the operations of a bus company, such as scheduling, ticketing, and tracking. Santosh [Roll:BCA2000035] demonstrated excellent skills in programming, database, and user interface design, as well as teamwork and communication.</p>
            <h3>Team Member</h3>
            <span></span>
            <img src="images/sontosh.png" alt="">
         </div>

         <div class="swiper-slide slide">
            
            <p>Anisha Karmakar is an student of Raiganj University [CIS department] who successfully completed the project "MyBus". The project aimed to design and implement a system that can manage the operations of a bus company, such as scheduling, ticketing, and tracking. Anisha [Roll: BCA2010006] demonstrated excellent skills in programming, database, and user interface design, as well as teamwork and communication.</p>
            <h3>Team Member</h3>
            <span></span>
            <img src="images/anisha.jpg" alt="">
         </div>

         <div class="swiper-slide slide">
           
            <p>Sultan Mandal is gives assistance for documentation, designing suggestion and resources in the "Bus Management System" project. Sultan Mandal is an student of Raiganj University [CIS department] who successfully completed the project "MyBus". The project aimed to design and implement a system that can manage the operations of a bus company, such as scheduling, ticketing, and tracking. Sultan [Roll: BCA2010013] demonstrated excellent skills in programming, database, and user interface design, as well as teamwork and communication.</p>
            <h3>Team Member</h3>
            <span></span>
            <img src="images/sultan.jpg" alt="">
         </div>
		 
		 <div class="swiper-slide slide">
           
            <p>I am highly thankful to my project guide “Sri Umesh Sarkar” without only supervised me while my project, but also gave me valuable suggestions which will be very beneficial for me in future.</p>
            <h3>Guide</h3>
            <span></span>
            <img src="images/umeshsir.jpg" alt="">
         </div>

      </div>

   </div>

</section>

<section class="booking" style="background-color: #f2f2f2; padding: 50px; justify-content:center;">

    <div class="flex">
        <h1 style="font-size: 30px; margin-bottom: 10px;">Contact Our Team for Any Suggestion</h1>
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


<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>