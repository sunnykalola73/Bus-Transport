<html>
<head>
<link rel="stylesheet" type="text/css" href="../style/style.css" />
<title>Login/Sign</title>
</head>
<body>
<div id="main" style="background-color:#E7746F">
    <div id="header">
    	<div id="logo">
			<div id="logo_text">
              <h1><a href="index.php">BUS<span class="logo_colour">-TRANSPORT</span></a></h1>
              <h2 style="font-size: 30px">Welcome Admin...!!!</h2>
            </div>
        </div>
        <div id="menubar">
            <ul id="menu">
              <li  class="selected"><a href="index.php">Home</a></li>
              <li><a href="feedback.php">Feedbacks</a></li>
              <li><a href="subscriber.php">Subscribers</a></li>
              <li><a href="../logout.php">Logout</a></li>
            </ul>
         </div>
    </div>
    <div align="center">
	<table style="margin:0% 5% 5% 5%;font-size: 22px;border:thick solid;" cellspacing="15px">
		<caption><h1 align="center">User-Data</h1></caption>
		<thead rules="rows">
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email Address</th>
			<th>Mobile No.</th>
			<th>User Name</th>
			<th>Password</th>
			<th colspan="2">Action</th>
		</thead>
		<?php
			include('../connect.php');
			$sq="select * from user";
			$result=$connect->query($sq);
			while ($fe=$result->fetch_object()) {
		?>
		<tr>
			<td><?php echo $fe->id;?></td>
			<td><?php echo $fe->fname;?></td>
			<td><?php echo $fe->lname;?></td>
			<td><?php echo $fe->email;?></td>
			<td><?php echo $fe->mno;?></td>	
			<td><?php echo $fe->uname;?></td>
			<td><?php echo $fe->pwd;?></td>
			<td><a href="adminedit.php?eid=<?php echo $fe->id?>"><span  style="color: black;">Edit</span></a></td>
			<td><a href="admindelete.php?did=<?php echo $fe->id?>"><span  style="color: black;">Delete</span></a></td>
		</tr>
		<?php
			}
		?>
	</table>
	</div>	
    <div id="footer">
      <p><a href="index.php">Home</a></p>
    </div>
  	</div>
</body>
</html>
