
<?php
  session_start();
  include('connect.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>About</title>
<link rel="stylesheet" type="text/css" href="style/style.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div id="main" style="background-color:#E7746F">
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
              <li  class="selected"><a href="index.php">Home</a></li>
              <li><a href="book_online.php">Book Online</a></li>
              <li><a href="fleet.php">Fleet</a></li>
              <li><a href="signupform.php">Sign Up</a></li>
              <li>
              <?php
                if(!isset($_SESSION['user'])){
                    ?>
                    <a href="login.php">Login</a>
                    <?php
                }
              ?>
            </li><li><a href="logout.php">Logout</a></li>
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
        <table style="background-color:#E7746F;margin:10px 40px;" >
    	<tr>
        <td ><img style="height:400px;width:600px;"  src="bus2.png" />
        </td>
        <td>
        	<span style="margin:15px;font-size:38px;font-family:'Comic Sans MS', cursive;color:"#FFF">A Little About Us</span><br />
            <span style="margin:15px;font-size:30px;font-family:'Comic Sans MS', cursive;color:"#000">The School Bus Service You Need</span>
            <p style="margin:15px;font-size:18px;font-family:'Comic Sans MS', cursive;color:"#000">
            	Bus transport has been offering quality School Bus Service since 2000. Great service begins with great people and real experience, which is why we put so much into choosing the best people to join our team. You will always have a driver who knows punctuality, safe driving, and customer service inside and out. We aim to not only meet your needs, but also exceed your expectations of what a transportation service can be. We are proud to offer our services to clients throughout San Francisco area.
            </p>
        </td>
        </tr>
    </table>
    
    <div id="footer">
      <p><a href="index.php">Home</a> | <a href="about.php">About Us</a> | <a href="contact.php">Contact Us</a></p>
    </div>
 </div>
</body>
</html>
