
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Dashboard</title>

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

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo"><img src="images/bus logo.jpg" height=80 width=120></a>
	<nav class="navbar">
	  <a href="home.php" >Log Out</a>
   </nav>

</section>




<!-- packages section starts -->

<section class="packages">
   <h1 class="heading-title">Welcome Admin!</h1>
   <div class="box-container">

      <div class="box">
         
         <div class="content">
			<img src="images/busicon3.png" height=100>
            <h2>Edit Bus Details</h2>
            <a href="admin.php" class="btn">Edit</a>
         </div>
      </div>
      <div class="box">
         
         <div class="content">
			<img src="images/message.png" height=100>
            <h2>View Your Messages</h2>
            <a href="manage_contact.php" class="btn">check</a>
         </div>
      </div>
      <div class="box">
         
         <div class="content">
			<img src="images/busicon1.png" height=100>
            <h2>View Bookings</h2>
            <a href="manage_bookings.php" class="btn">View</a>
         </div>
      </div> 
	  <div class="box">      
         <div class="content">
			<img src="images/busicon2.png" height=100>
            <h2>View Privet bus bookings</h2>
            <a href="manage_privet_bookings.php" class="btn">View</a>
         </div>
      </div>
</section>

<a href="home.php" class="btn" style="margin-left:45%">Home</a>
 <!--packages section ends -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>