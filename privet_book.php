
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

</head>
<body>


<h1 style="text-align:center; margin-top:20px; font-size:30px; font-family:Georgia">Fill The following</h1>


<section class="booking">

   <form action="confirm_privatebus.php" method="post" class="book-form">

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
         <input type="text" name="bus_number" placeholder="enter bus number" required>
      </div>
      <div class="inputBox">
         <span>Date :</span>
         <input type="date" id="dateInput" name="date" placeholder="Date" onchange="checkDateValidity()">
         <p id="bookingInfo" style="color: red; display: none;"></p>
      </div>
      <div class="inputBox">
         <span>Days :</span>
         <input type="text" placeholder="How many days of Booking" name="days" required>
      </div>
		 
         <div class="inputBox">
            <span>Reason :</span>
            <input type="text" placeholder="purpose of booking" name="reason" required>
         </div>
         
      </div>

      <input type="submit" value="submit" class="btn" name="send" style="margin-left:35%;">
	  <a href="privet.php" class="btn" type="button">Back</a>

   </form>
   </section>

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>


<script>
   function checkDateValidity() {
      const dateInput = document.getElementById("dateInput");
      const bookingInfo = document.getElementById("bookingInfo");

      // Clear any previous booking info messages
      bookingInfo.style.display = "none";

      // Check if the selected date is a future date
      const selectedDate = new Date(dateInput.value);
      const currentDate = new Date();

      if (selectedDate < currentDate) {
         bookingInfo.textContent = "Please select a future date.";
         bookingInfo.style.display = "block";
      }
   }
</script>

</body>
</html>