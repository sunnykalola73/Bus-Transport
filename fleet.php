<?php
  session_start();
  include('connect.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>FLeet</title>
<link rel="stylesheet" type="text/css" href="style/style.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div id="main">
        <div id="header">
          <marquee scrollamount=20 onmouseover="this.stop();" onmouseout="this.start();">
          <div id="logo">
            <div id="logo_text">
              <h1><a href="index.php">BUS<span class="logo_colour">-TRANSPORT</span></a></h1>
            </div>
          </div>
          </marquee>
          <div id="menubar">
            <ul id="menu">
              <li><a href="index.php">Home</a></li>
              <li><a href="book_online.php">Book Online</a></li>
              <li class="selected"><a href="fleet.php">Fleet</a></li>
              <li><a href="signupform.php">Sign Up</a></li>
              <li>
              <?php
                if(!isset($_SESSION['user'])){
                    ?>
                    <a href="login.php">Login</a>
                    <?php
                }
              ?>
            </li>
              <li><a href="logout.php">Logout</a></li>
              <li>
              <?php 
              if(isset($_SESSION['user'])){
                ?>
                <a href="edit.php?eid=<?php echo $_SESSION['id']?>">
                <?php
                echo $_SESSION['user'];
              }
              else{
                ?>
                <a href="login.php">
                <?php                
                    echo 'Profile';
              }
              ?>  
              </a></li>
            </ul>
          </div>
        </div>

    	<span style="font-size:38px;font-family:'Comic Sans MS', cursive;color:#800000;margin-left:35%;">20 Passenger Bus</span>
        <p style="font-family:'Monotype Corsiva';font-size:28px;">
        	With our incredible 20 Passenger  Bus you will be sure to have a smooth ride to your destination. All of our vehicles are great for any journey or any occasion and offer all necessary modern amenities to passengers. Available with both front-wheel drive and all-wheel drive, you can feel comfortable traveling in any type of weather. Get in touch with us to learn more about the vehicles in our fleet.
        </p>
    
   
    	<span style="font-size:38px;font-family:'Comic Sans MS', cursive;margin-left:35%;color:#800000" >Standard Sedan</span>
    	<p style="font-family:'Monotype Corsiva';font-size:28px;">
        	Looking for a relaxing ride? This could be the choice for you. All vehicles in our Standard Sedan fleet come with a full TV/DVD/CD Entertainment System as well as electric windows and locks to ensure your safety and security. Our Standard Sedan can accommodate many pieces of luggage comfortably and, as we promise with all of our vehicles, is immaculately clean on the inside and out.
        </p>
        
    	<span style="font-size:38px;font-family:'Comic Sans MS', cursive;color:#800000;margin-left:35%;">Standard SUV</span>
        <p style="font-family:'Monotype Corsiva';font-size:28px;">
        	If you need a reliable and comfortable vehicle for your next journey, our Standard SUV is one of our customer favorites. With tinted windows, a great sound system, and room for all your luggage, you will  be traveling without a care in the world. Get in touch with us to make a reservation or find out more information about other Standard SUV models in our fleet.
        </p>
    
    <div id="footer">
      <p><a href="index.php">Home</a> | <a href="about.php">About Us</a> | <a href="contact.php">Contact Us</a></p>
    </div>
 </div>
</body>
</html>
