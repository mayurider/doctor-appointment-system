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
				<li>
					<a href="Dindex.php">MyInformation</a>
				</li>
				<li><a href="doctorapp.php">My Appointments</a></li>
				<li class="active"><a href="searchpatient.php">Search Patient</a></li>
				<li><a href="add.php">Add Description</a></li>
				<li><a href="logout.php">LOGOUT</a></li>
		

			</div>
					
					

<form method="post" action="searchpatient.php">
	<div class="input-group">
		<label style="font-weight: bold; font-size: 30px">Search By:</label>
		<label style="font-weight: bold">*Patient ID</label>
		<label style="font-weight: bold">*Patient Name</label>
		<input type="text" name="PID" >

	</div>

	<div class="input-group">
		<button type="submit" name="SearchP" class="btnsearch">Search</button>
	</div>


</div>	


	

		<?php 

         if (isset($_POST['SearchP'])) {

         ?>	<table border="1"  >
         	<caption style="margin-left: 34px;padding: 10px;font-weight: bold;font-size: 30px;" class="asd">Patient Information</caption>

		<tr>
		<th>PatientID</th>
		<th>Name</th>
		<th>Address</th>
		<th>Contact Number</th>
		<th>Email</th>
		<th>BloodGroup</th>


		</tr> <?php  


		$PID =mysql_real_escape_string($_POST['PID']);

		$sqlP="SELECT  * FROM  patients   WHERE 	UserID=('$PID') OR Name=('$PID') " ;
		$resultP=mysql_query($sqlP);
		if(mysql_num_rows($resultP)==1){
			while ($rowP=mysql_fetch_assoc($resultP)) {

				echo "<tr><td>".$rowP["UserID"]."</td><td>".$rowP["Name"]."</td><td>".$rowP["Address"]."</td><td>".$rowP["ContactNumber"]."</td><td>".$rowP['Email']."</td><td>".$rowP['Bloodtype']."</td></tr>";
			}


			echo "</table";
	


		}
	}?>
 </table>
			<?php 	
				 if (isset($_POST['SearchP'])) {

         ?>	<table border="1">
         	<caption style="margin-left: 34px;padding: 10px;font-weight: bold;font-size: 30px;" class="asd">Treatment History</caption>
		<tr>
		<th>PatientID</th>
		<th>PatientName</th>
		<th>Treatment</th>
		<th>Doctor's Note</th>	


		</tr> <?php  


		$PID =mysql_real_escape_string($_POST['PID']);

		$sqlP2="SELECT  * FROM  description   WHERE descID=('$PID') OR descName=('$PID') " ;
		$resultP2=mysql_query($sqlP2);
		if(mysql_num_rows($resultP2)>1){
			while ($rowP2=mysql_fetch_assoc($resultP2)) {

				echo "<tr><td>".$rowP2["descID"]."</td><td>".$rowP2["descName"]."</td><td>".$rowP2["treatment"]."</td><td>".$rowP2['Note']."</td></tr>";
			}


			echo "</table";
	


		}
	}?>
 </table>
					
    </header>
 </body>
</html>

