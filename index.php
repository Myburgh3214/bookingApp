<!DOCTYPE html>
<html>
<title>bookApp</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/stylesheet.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
</style>
<body class="w3-light-grey">

<!-- Navigation Bar -->
    

<!-- Page content -->
<div class="w3-content" style="max-width:1532px;">

  <div class="w3-container w3-margin-top" id="costs">
    <h3>Booking App</h3>
    <p>Put in your requests in the input fields and press the book button and you will be booked at the hotel of your choosing, its as simple as that. If you want to compare all the hotels we provide you with, just simply press the compare button to see the different etc.</p>
  </div>
  <?php if (!$_POST) { ?>
    <form action="index.php" method="post">
  <div class="w3-row-padding">
    <div class="w3-col m3">
      <label><i class="fa fa-calendar-o"></i> Check In</label>
      <input class="w3-input w3-border" type="date" placeholder="DD MM YYYY" id="checkIn" name="checkIn">
    </div>
    <div class="w3-col m3">
      <label><i class="fa fa-calendar-o"></i> Check Out</label>
      <input class="w3-input w3-border" type="date" placeholder="DD MM YYYY" name="checkOut" id="checkOut">
    </div>
    <div class="w3-col m2">
      <label><i class="fa fa-male"></i> First Name:</label>
      <input class="w3-input w3-border" type="text" placeholder="First Name" name="name" id="name">
    </div>
    <div class="w3-col m2">                   
      <label><i class="fa fa-child"></i> Last Name</label>
      <input class="w3-input w3-border" type="text" name="lastName" id="lastName" placeholder="Last Name">
    </div>
    <div class="w3-col m2">
                

      <label><i class="fa fa-search"></i> Select your hotel:</label>
        <select id="hotelName" name="hotelName">
            <option value="Commodore Hotel" id="commodoreHotel" name="commodoreHotel">Commodore Hotel</option>
            <option value="Southern Sun" id="southernSun" name="southernSun">Southern Sun</option>
        </select>
            <button type="submit" value="Submit" name="bookBtn" id="bookBtn">Book</button>
            <button type="submit" value="Submit" name="compareBtn" id="compareBtn">Compare</button>        
        
    </div>
  </div>
    </form>
  <div class="w3-row-padding" id="about">
    <div class="w3-col l4 12">
      <h3>About</h3>
      <h6></h6>
    <p>We accept: <i class="fa fa-credit-card w3-large"></i> <i class="fa fa-cc-mastercard w3-large"></i> <i class="fa fa-cc-amex w3-large"></i> <i class="fa fa-cc-cc-visa w3-large"></i><i class="fa fa-cc-paypal w3-large"></i></p>
    </div>
    <div class="w3-col l8 12">
        
     
    </div>
  </div>
  
  <div class="w3-row-padding w3-large w3-center" style="margin:32px 0">
  <div class="w3-third"><i class="fa fa-map-marker w3-text-red"></i> Portswood Rd, Victoria & Alfred Waterfront, Cape Town, 8002</div>
  <div class="w3-third"><i class="fa fa-phone w3-text-red"></i> Phone: 021 415 1000</div>
  <div class="w3-third"><i class="fa fa-envelope w3-text-red"></i> Email: hotels@legacyhotels.co.za</div>
  </div>

  <div class="w3-panel w3-red w3-leftbar w3-padding-32">
    <h6><i class="fa fa-info w3-deep-orange w3-padding w3-margin-right"></i> On demand, we can offer playstation, babycall, children care, dog equipment, etc.</h6>
  
            <span class="w3-display-bottomleft w3-padding">Paris</span>
  </div>
  </div>
<!-- End page content -->

<!-- Footer -->
<footer class="w3-padding-32 w3-black w3-center w3-margin-top">
  <h5>Find Us On</h5>
  <div class="w3-xlarge w3-padding-16">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>
</body>
</html>
<?php } else {
    
    $firstName = $_POST["name"];
    $lastName = $_POST["lastName"];
    $checkIn = $_POST["checkIn"];
    $checkOut = $_POST["checkIn"];
    $hotelName = $_POST["hotelName"];
    echo "$firstName $lastName Checkin Date: $checkIn Checkout Date: $checkOut Hotel Name: $hotelName";
    
    /// if statement to switch pictures for the two hotels.
    if ( isset( $_POST['bookBtn'] ) ) { 
      $hotelName = $_POST["hotelName"];
    if ($hotelName === "Commodore Hotel"){
      echo "<img src='images/commodoreOutside.jpg'/>";
        }else if($hotelName==="Southern Sun"){
      echo "<img src='images/southernOutside.jpg'/>";
    }
}
}
?>
<div>
<?php
if ( isset( $_POST['compareBtn'] ) ) { 
  $hotelName = $_POST["hotelName"];
  echo "Commodore Hotel:
  Standard Twin Bedroom: R450 per night King Suite: R600 per night Restaurant:Yes Pool: Yes Spa: Yes";
  echo "<img src='images/commodoreHotel.jpg'/>";
  echo "Southern Hotel Waterfront:
  Standard Twin Bedroom: R500 per night King Suite: R700 per night Restaurant:Yes Pool: Yes Spa: No Gym: Yes";
  echo "<img src='images/southernRooms.jpg'/>";
}
?>
</div>
