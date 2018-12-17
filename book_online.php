<?php
  session_start();
  include('connect.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style/style.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<title>Online_Booking</title>
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
              <li><a href="index.php">Home</a></li>
              <li  class="selected"><a href="book_online.php">Book Online</a></li>
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
        <?php
          if(!isset($_SESSION['user'])){
            ?>

        <div style="background-color:#E7746F;" align="center" ><br /><br  /><br  /><br  /><br />
        <span style="color:#FFF;font-size:38px;font-family: Comic Sans MS, cursive;">You must have to Login or Sign Up to Book Online..!</span><br />
        <span style="font-size:32px;font-family: Comic Sans MS, cursive;">Click here to Login or Sign UP...</span><br  />
        <p style="font-size:24px;font-family: Comic Sans MS, cursive;" ><a href="signupform.php">Sign Up</a> |  <a href="login.php">Login/Sign In</a></p><br /><br /><br /><br /><br /><br />
    	</div>
      <?php
        }
        else{
          ?>
          <div align="center">
            <form method="POST" name="f1">
            <table style="background-color: white;margin:0% 0% 5% 0%;border: thick solid;">
            <caption><h2 align="center">Book Tickets</h2></caption>
            <tr>
            <td>
            <div class="input-group" style="margin:5% 5% 0% 5%">
              <span class="input-group-addon" id="basic-addon1">Enter your Source:</span>
              <input type="text" class="form-control" placeholder="Leaving From." aria-describedby="basic-addon1">
            </div>
            </td>
            </tr>
              <tr>
                <td>
                  <div class="input-group" style="margin:5% 5% 0% 5%">
                    <span class="input-group-addon" id="basic-addon1">Enter your Destination</span>
                    <input type="text" class="form-control" placeholder="Going to." aria-describedby="basic-addon1">
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="input-group" style="margin:5% 5% 0% 5%">
                    <span class="input-group-addon" id="basic-addon1">Date of Journy</span>
                    <input type="date" class="form-control" placeholder="dd/mm/yyyy" aria-describedby="basic-addon1">
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="input-group" style="margin:5% 5% 5% 5%">
                    <span class="input-group-addon" id="basic-addon1">Number of Pasangers</span>
                    <input type="number" class="form-control" aria-describedby="basic-addon1" >
                  </div>
                </td>
              </tr>
              <tr>
                <td align="center" ><div style="margin-bottom:5%;"><button type="submit" class="btn btn-default" name="submit" onfocus="check()"><a href="book.php">Serch for Bus</a></button>
                <button type="reset" class="btn btn-primary" name="reset">Reset</button></div></td>
              </tr>
              </table>
            </form>
            </div>
          <?php
        }
      ?>
    <div id="footer">
      <p><a href="index.php">Home</a> | <a href="about.php">About Us</a> | <a href="contact.php">Contact Us</a></p>
    </div>


 </div>
</body>
</html>
