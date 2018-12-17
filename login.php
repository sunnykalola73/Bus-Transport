<?php
	include('connect.php');
	session_start();
	if(isset($_REQUEST['submit']))
	{
		$uname=$_REQUEST['uname'];
		$pwd=$_REQUEST['pwd'];
		$lq="select * from user where uname='$uname' AND pwd='$pwd'";		
		$result=$connect->query($lq);
		$check=$result->num_rows;
		$temp=$result->fetch_object();
		$id=$temp->id;
		if($check==1){
			$_SESSION['user']=$uname;
			$_SESSION['id']=$id;
			if($uname=="jd1617" AND $pwd=="jaydeep"){
				?>
				<script type="text/javascript">
					alert("Login Successful");
					window.location="Admin/index.php";
				</script>
				<?php	
			}
			else{
			?>
			<script type="text/javascript">
				alert("Login Successful");
				window.location="index.php";
			</script>
			<?php
			}
		}
		else{
			?>
			<script type="text/javascript">
				alert("Username or Password might be incorrect.");
				window.location="login.php";
			</script>
			<?php
		}
	}
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
<title>Login/Sign</title>
<script type="text/javascript">
function check()
	{
		var uname=document.getElementById('uname').value;
		var pwd=document.getElementById('pwd').value;
		if(uname=="")
		{
		 	alert("Username can't blank");
			f1.uname.focus();
		}
		else if(pwd=="")
		{
		 	alert("Password can't blank");
			f1.pwd.focus();
		}
	}
</script>
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
              <li><a href="book_online.php">Book Online</a></li>
              <li><a href="fleet.php">Fleet</a></li>
              <li><a href="signupform.php">Sign Up</a></li>
              <li class="selected"><a href="login.php">Login</a></li>
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
	<div align="center">
		<form method="POST" name="f1">
			<table style="background-color: white;margin:0% 0% 7% 0%;">
			<caption><h1 align="center">Login Here</h1></caption>
			<tr>
				<td>
					<div class="input-group" style="margin:5% 5% 0% 5%">
						<span class="input-group-addon" id="basic-addon1">Username</span>
						<input type="text" name="uname" class="form-control" placeholder="Username" aria-describedby="basic-addon1" id="uname">
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div class="input-group" style="margin:5%">
						<span class="input-group-addon" id="basic-addon1"> Password </span>
						<input type="password" name="pwd" class="form-control" placeholder="Password" aria-describedby="basic-addon1" id="pwd">
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center" ><div style="margin-bottom:5%;"><input type="submit" class="btn btn-success" name="submit" value="Login/Sign In"  onfocus="check()"></div></td>
			</tr>
			</table>
		</form>
	</div>
    <div id="footer">
      <p><a href="index.php">Home</a> | <a href="about.php">About Us</a> | <a href="contact.php">Contact Us</a></p>
    </div>
  	</div>
</body>
</html>
