<?php
	include("dacon.php");
	session_start();
	if(!isset($_SESSION['DoctorID']))
	{
		header("location:Dlogin.php");
	}
?>
<html>
 <head>
	<title>doctor appointment
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
	<header>
	<div class="logo">
		<img src="tlogo.png">
	</div>
		<div class="main">
			
			<ul>
				<li class="active">
					<a href="Dindex.php">MyInformation</a>
				</li>
				<li><a href="doctorapp.php">My Appointments</a></li>
				<li><a href="searchpatient.php">Search Patient</a></li>
				<li><a href="add.php">Add Description</a></li>
				<li><a href="logout.php">LOGOUT</a></li>
		

			</div>

		<div class="form-box-2">
				<div>
					<form class="input-grp-1" method="post" action="Dindex.php">

					<div class="Dcontent">


			<label>ID: <?php echo $m=$_SESSION['DoctorID']; $row=mysql_query("select * from doctor where DoctorID='$m'"); $p = mysql_fetch_assoc($row);?></label>

	 	   <br>
	 	   <br>
	 	   <label> Email : <?php  echo $p["email"]; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Name : <?php  echo $p["Doctorname"]; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Address : <?php echo $p["Address"]; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Contact Number : <?php echo $p["ContactNumber"]; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Specialized In : <?php echo $p["categorey"]; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   



	
        
           
	
</div>
</form>
			</div>
			
		
			
	
		
		
		
	
		
    </header>
 </body>
</html>

