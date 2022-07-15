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
				<li><a href="#">Search Doctor</a></li>
				<li><a href="logout.php">LOGOUT</a></li>
		

			
<form method="post" action="searchdoctor.php">

	

	<div class="input-group">
		<label style="font-weight: bold;">Search By:<br>*Doctor ID<br>*Doctor Name<br>*Categorey</label>
		<input type="text" name="dID" >

	</div>

	<div class="input-group">
		<button type="submit" name="Search" class="btn">Search</button>
	</div>

	







		</form>



	

		<?php 

         if (isset($_POST['Search'])) {

         ?>	<table class="table2">
		<tr>
		<th>Doctor ID</th>
		<th>Doctor Name</th>
		<th>Address</th>
		<th>Contact Number</th>
		<th>Category</th>

		</tr> <?php  


		$dID =$mysqli -> real_escape_string($_POST['dID']);

		$sql6="SELECT  * FROM  doctor   WHERE 	Doctorname=('$dID') OR DoctorID=('$dID') OR categorey=('$dID')" ;
		$result6=$mysqli->query($sql6);
		if(mysqli_num_rows($result6)==1){
			while ($row6=$result6->fetch_assoc()) {

				echo "<tr><td>".$row6["DoctorID"]."</td><td>".$row6["Doctorname"]."</td><td>".$row6["Address"]."</td><td>".$row6["ContactNumber"]."</td><td>".$row6['categorey']."</td></tr>";
			}


			echo "</table";
	


		}
	}?>
 </table>
				
	
		
		
	
		
    </header>
 </body>
</html>

