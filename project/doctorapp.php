<?php
	include("dacon.php");
	session_start();
	$m=$_SESSION['DoctorID'];
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
				<li>
					<a href="Dindex.php">MyInformation</a>
				</li>
				<li class="active"><a href="doctorapp.php">My Appointments</a></li>
				<li><a href="searchpatient.php">Search Patient</a></li>
				<li><a href="add.php">Add Description</a></li>
				<li><a href="logout.php">LOGOUT</a></li>
		

			</div>

		<div class="dlist">
				<h1>Patients Information</h1>
				<table border="2" class="tbladj" bordercolor="grey">
					<tr>
						<th>Appointment ID</th>
						<th>DATE</td>
						<th>TIME</th>
						<th>PatientID</th>
						<th>PatientName</th>
						<th>PatientAddress</th>
						<th>PatientEmail</th>
						<th>PatientContactNumber</th>
						<th>BloodGroup</th>

					</tr>
			<?php $q="SELECT  * FROM bookapp , patients   WHERE docID=('$m') AND  patientID=UserID"  ;
				$r=mysql_query($q);
				
				while($rowdoc=mysql_fetch_assoc($r)){

						echo "<tr><td>".$rowdoc["AppoID"]."</td><td>".$rowdoc["Date"]."</td><td>".$rowdoc["Time"]."</td><td>".$rowdoc["UserID"]."</td><td>".$rowdoc['Name']."</td><td>".$rowdoc['Address']."</td><td>".$rowdoc['Email']."</td><td>".$rowdoc["ContactNumber"]."</td><td>".$rowdoc["Bloodtype"]."</td></tr>";
				}

				
			echo "</table";
	


		

		?>
		
	</table>
	</div>
		
    </header>
 </body>
</html>

