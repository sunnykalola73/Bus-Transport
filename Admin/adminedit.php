<?php
    session_start();
    include('../connect.php');
    if(isset($_REQUEST['eid'])){
        $jd=$_REQUEST['eid'];
        $sq="select * from user where id=$jd";
        $temp=$connect->query($sq);
        $result=$temp->fetch_object();
    }
    if(isset($_REQUEST['update']))
    {
        $jd=$_REQUEST['eid'];
        $fname=$_REQUEST['fname'];
        $lname=$_REQUEST['lname'];
        $email=$_REQUEST['email'];
        $mno=$_REQUEST['mno'];
        $uname=$_REQUEST['uname'];
        $pwd=$_REQUEST['pwd'];
        $iq=" update user set fname='$fname',lname='$lname',email='$email',mno='$mno',uname='$uname',pwd='$pwd' where id=$jd";
        $result=$connect->query($iq);
        if($result){
            ?>
            <script type="text/javascript">
                alert("Account Updated Successfully.");
                window.location="index.php";
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
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../style/style.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<title>Sign Up</title>
<script type="text/javascript">
    function check()
    {
        var fname=document.getElementById('fname').value;
        var lname=document.getElementById('lname').value;
        var email=document.getElementById('email').value;
        var mno=document.getElementById('mno').value;
        var uname=document.getElementById('uname').value;
        var pwd=document.getElementById('pwd').value;
        if(fname==""){
            alert("First Name can't blank");
            f1.fname.focus();
        }
        else if(lname=="")
        {
            alert("Last Name can't blank");
            f1.lname.focus();
        }
        else if(email==""){
            alert("Email Address can't blank");
            f1.email.focus();
        }
        else if(mno=="")
        {
            alert("Mobile number can't blank");
            f1.mno.focus();
        }
        else if(uname=="")
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
              <li class="selected">
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
            <table style="background-color: white;margin:0% 0% 5% 0%;">
            <caption><h2>Update Information</h2></caption>
            <tr>
                <td>
                    <div class="input-group" style="margin:5% 5% 0% 5%">
                        <span class="input-group-addon" id="basic-addon1">First Name</span>
                        <input type="text" name="fname" class="form-control" placeholder="First Name" aria-describedby="basic-addon1" id="fname" value="<?php echo $result->fname;?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="input-group" style="margin:5% 5% 0% 5%">
                        <span class="input-group-addon" id="basic-addon1">Last Name</span>
                        <input type="text" name="lname" class="form-control" placeholder="Last Name" aria-describedby="basic-addon1" id="lname" value="<?php echo $result->lname;?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="input-group" style="margin:5% 5% 0% 5%">
                        <span class="input-group-addon" id="basic-addon1">Email Address</span>
                        <input type="text" name="email" class="form-control" placeholder="abc@xyz.com" aria-describedby="basic-addon1" id="email" value="<?php echo $result->email;?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="input-group" style="margin:5% 5% 0% 5%">
                        <span class="input-group-addon" id="basic-addon1">Mobile No.</span>
                        <input type="number" name="mno" class="form-control" placeholder="10 digit Number" aria-describedby="basic-addon1" id="mno" value="<?php echo $result->mno;?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="input-group" style="margin:5% 5% 0% 5%">
                        <span class="input-group-addon" id="basic-addon1">Username</span>
                        <input type="text" name="uname" class="form-control" placeholder="Username" aria-describedby="basic-addon1" id="uname" value="<?php echo $result->uname;?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="input-group" style="margin:5%">
                        <span class="input-group-addon" id="basic-addon1"> Password </span>
                        <input type="password" name="pwd" class="form-control" placeholder="Password" aria-describedby="basic-addon1" id="pwd" value="<?php echo $result->pwd;?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td align="center" ><div style="margin-bottom:5%;"><input type="submit" class="btn btn-success" name="update" value="Update" onfocus="check()">
                <input type="reset" class="btn btn-primary" name="reset" value="Reset" ></div></td>
            </tr>
            </table>
        </form>
        </div>
    <div id="footer"  style="position:relative;bottom:0>
      <p><a href="index.php">Home</a> | <a href="about.php">About Us</a> | <a href="contact.php">Contact Us</a></p>
    </div>
</div>
</body>
</html>
