<?php
    include('connect.php');
    session_start();
    if(isset($_REQUEST['fb']))
    {
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $feedback=$_REQUEST['feedback'];
        $fq="insert into feedback (name,email,feedback) value ('$name','$email','$feedback')";
        $result=$connect->query($fq);
        if($result){
            ?>
            <script type="text/javascript">
                alert("Thanks For your Feedback...........!!!!!!");
            </script>
            <?php
        }
        else{
            ?>
            <script type="text/javascript">
                alert("Something went wrong.Please try again.");
            </script>
            <?php
        }
    }
    if(isset($_REQUEST['submit']))
    {
        $semail=$_REQUEST['semail'];
        $fq="insert into subscriber (email) value ('$semail')";
        $result=$connect->query($fq);
        if($result){
            ?>
            <script type="text/javascript">
                alert("Thank you for subscribe our website...!!!");
            </script>
            <?php
        }
        else{
            ?>
            <script type="text/javascript">
                alert("Something went wrong.Please try again.");
            </script>
            <?php
        }
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style/style.css" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 <script type="text/javascript">
    function scheck() {
        var email=document.getElementById('semail').value;
        if(email==""){
            alert("Email Address can't blank");
            f2.semail.focus();    
        }
    }
    function check()
    {
        var name=document.getElementById('name').value;
        var email=document.getElementById('email').value;
        var feedback=document.getElementById('feedback').value;
        if(name==""){
            alert("Name can't blank");
            f1.name.focus();
        }
        else if(email==""){
            alert("Email Address can't blank");
            f1.email.focus();    
        }
        else if(feedback==""){
            alert("Please enter your feedback.");
            f1.feedback.focus();    
        }
    }
</script>
   
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
              <li class="selected"><a href="index.php">Home</a></li>
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
	<div>
        <div>
        	<table width="100%">
            	<tr style="background-color:">
                	<td width="50%">
						<span style="font-size:36px;font-family:'Comic Sans MS', cursive;color:#800000"><center>Get To Know Us</center></span>
                        <p style="font-size:18px;font-family:gill sans MT">A large number of parents are now part of the 9-6 work culture. This prevents them from ensuring their children’s safe transportation to and from schools. Even in the case of parents who take their children to school in their private vehicles, the accident rate has been high. The prime reason for this is that school transportation happens during peak traffic hours.</p>
                    </td>
                    <td><img src="bus3.png" width="100%"/>
                    </td>
                </tr>
                <tr>
                	<td width="50%">
                    	<span style="font-size:36px;font-family:'Comic Sans MS', cursive;color:#800000"><center>School Bus Transportation<br  /><br  />
                    	<button type="submit" class="btn btn-default"/><a href="contact.php">Contact Us</a></center>
                        </span>
                    </td>
                    <td><img src="bus1.png" width="100%"/>
                    </td>
                </tr>
                <tr>
                	<td width="50%"><img width="100%" src="bus2.png" />
                    </td>
                    <td>
                    	<span style="font-size:36px;font-family:'Comic Sans MS', cursive;color:#800000"><center> Bus Transportation
                        <br  /><br  />
                        <button type="submit" class="btn btn-default"/><a href="contact.php">Contact Us</a>
                        </center></span>
                    </td>
                </tr>
                <tr>
                	<td width="50%">
                    	<span style="font-size:36px;font-family:'Comic Sans MS', cursive;color:#800000"><center>School Bus Rentals
                    	<br  /><br  />
                        <button type="submit" class="btn btn-default"/><a href="contact.php">Contact Us</a>
                        </center></span>
                    </td>
                    <td><img width="100%" src="bus3.png"  />
                    </td>
                </tr>
            </table>
        </div>
        <div>
        	<center>
        	<table style="background-color:#CCC;width:100%">
            	<tr>
                	<td style="font-family:'Comic Sans MS', cursive;" align="right" width="50%"><br  />
                    <div style="margin-right:7%;">	<span style="font-size:36px;"> We Want Feedback <br  /> from You!</span><br /><br  />
                    	<b>Address: </b>DA-IICT, Gandhinagar.<br /><br />
						<b>Email :</b>	jaydeeperaniya17jd@gmail.com<br  /><br  />
						<b>Contact no.:</b> 7567778710<br  /><br  />
                    </div>
                    </td>
                    <td align="left">
                            <form method="POST" name="f1">
                        	<table style="margin-left:7%;" cellspacing="5">
                            	<tr>
                                	<td style="font-family:'Comic Sans MS', cursive;"><b>Enter your Name :</td>
                                    <td><input type="text" name="name" id="name" /></td>
                                </tr>
                                <tr>
                                	<td style="font-family:'Comic Sans MS', cursive;"><b>Enter your Email :</td>
                                    <td><input type="text" name="email" id="name" /></td>
                                </tr>
                                <tr>
                                	<td style="font-family:'Comic Sans MS', cursive;"><b>Enter your Feedback :</td>
                                    <td><textarea rows="3" cols="30" name="feedback" id="name"></textarea></td>
                                </tr>
                            </table>
                            <br  />
                      <span style="margin-left:25%;" ><input type="submit" class="btn btn-danger dropdown-toggle" value="Submit" name="fb" onclick="check()" /></span>
                        </form>
                    </td>
                </tr>
            </table>
            </center>
        </div>
        <div align="center">
        				<span style="font-size:40px;">Subscribe to stay up to date...!!</span>
						<form method="POST" name="f2">
                        <table>
						<tr>
							<td>
								<span>
									<div class="input-group input-group-lg">
										<span class="input-group-addon" id="sizing-addon1">@</span>
										<input type="text" class="form-control" placeholder="Email Address" aria-describedby="sizing-addon1" size="40" name="semail" id="semail">
									</div>
								</span><br  />
								<span style="margin-left:40%;">
								<input type="submit" style="font-size:28px;" type="button" class="btn btn-danger dropdown-toggle" value="Submit" name="submit"/>
								</span>
							</td>
						</tr>
						</table>
                        </form>
        </div>
		<br>
    </div>
    <div id="footer">
      <p><a href="index.php">Home</a> | <a href="about.php">About Us</a> | <a href="contact.php">Contact Us</a></p>
    </div>
  </div>
</body> 
</html>
