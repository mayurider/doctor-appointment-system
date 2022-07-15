<?php
	include("dacon.php");
	session_start();
	$m=$_SESSION['snm'];
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
				<li>
					<a href="Pindex.php">MyInformation</a>
				</li>
				<li>
					<a href="Pindex.php">Appointment ></a>
						<div class="sub-menu-1">
						<ul>
						<h5>_______________</h5><br>
						<li class="active"><a href="view.php"> View </a></li><br>
						<h5>_______________</h5><br>
						<li><a href="book.php"> Book</a></li>
						<h5>_______________</h5><br>
						<li><a href="cancel.php"> Cancel-booking </a></li>
						<h5>_______________</h5><br>
						</ul>
				
				
				
						</div>
				</li>
				<li><a href="#">Search Doctor</a></li>
				<li><a href="logout.php">LOGOUT</a></li>
	
		</div>

			<div class="dlist">
				<h1>My Information</h1>
				<table border="2" class="tbladj" bordercolor="grey">
					<tr>
						<th>Appointment ID</th>
						<th>DATE</td>
						<th>TIME</th>
						<th>Doctor ID</th>
						<th>Doctor Name</th>
						<th>Address</th>
						<th>Contact Number</th>
						<th>Category</th>

					</tr>
					<?php 
						include("dacon.php");
						$q="SELECT  * FROM bookapp , doctor   WHERE patientID=('$m') AND  docID=DoctorID ";
						$r=mysql_query($q);
						while($row=mysql_fetch_row($r))
						echo "<tr><td>".$row[AppoID]."</td><td>".$row['Date']."</td><td>".$row['Time']."</td><td>".$row['docID']."</td><td>".$row['Doctorname']."</td><td>".$row['Address']."</td><td>".$row['ContactNumber']."</td><td>".$row['categorey']."</td></tr>";
						echo "</table";
					?>
				</table>
				</div>

		
	
	</header>

 </body>
</html>

