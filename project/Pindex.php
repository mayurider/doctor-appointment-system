<?php
	include("dacon.php");
	session_start();
	if(!isset($_SESSION['snm']))
	{
		header("location:Plogin.php");
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
					<a href="Pindex.php">MyInformation</a>
				</li>
				<li>
					<a href="Pindex.php">Appointment ></a>
						<div class="sub-menu-1">
						<ul>
						<h5>_______________</h5><br>
						<li><a href="view.php"> View </a></li><br>
						<h5>_______________</h5><br>
						<li><a href="book.php"> Book</a></li>
						<h5>_______________</h5><br>
						<li><a href="cancel.php"> Cancel-booking </a></li>
						<h5>_______________</h5><br>
						</ul>
				
				
				
						</div>
				</li>
				<li><a href="searchdoctor.php">Search Doctor</a></li>
				<li><a href="logout.php">LOGOUT</a></li>
		

			

		<div class="form-box-2">
				<div>
					<form class="input-grp-1" method="post">

					<div class="ALtitle-1"><h4>My Information</h4></div>
					
					
							<label>ID: </label><?php  echo $j=$_SESSION["snm"]; $row=mysql_query("select * from patients where UserID ='$j'"); $mj = mysql_fetch_assoc($row);?>

								<br>
							   <br>
							   <label> Email : <?php  echo $mj["Email"];?> </label>
									   <br>
							   <br>
							   <label> Name : <?php echo $mj["Name"];?></label>
									   <br>
							   <br>
							   <label> Address : <?php echo $mj["Address"];?> </label>
									   <br>
							   <br>
							   <label> Contact Number : <?php echo $mj["ContactNumber"];?></label>
									   <br>
							   <br>
							   <label> Blood Type : <?php echo $mj["Bloodtype"];?> </label>
									   <br>
							   <br>
											
						
						<button type="submit" name="treatmentHistory" class="sub-btn-2">MyTreatment History</button>
						
					
					</form>	
						
				</div>
			</div>
			
		
			
	<div class="form-box-3">
			<div>
				<div class="ALtitle-2">
					<h4>FEEDBACK</h4>
					<form class="input-grp-2" method="post" action="Pindex.php">
						
						<textarea name="feedx" placeholder="Write something.."></textarea><br>
						
						<button type="submit" class="sub-btn-3" name="sendfeedback">SEND</button>
			
					</form>	
					</div>
			</div>
	</div>
		
		
		
	
		
    </header>
 </body>
</html>

