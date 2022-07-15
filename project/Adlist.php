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
					<a href="Aindex.php">ADD/DELETE DOCTOR</a>
				</li>
				<li>
					<a href="#">VIEW ></a>
						<div class="sub-menu-1">
						<ul>
						<h5>_______________</h5><br>
						<li class="active"><a href="Adlist.php"> DOCTOR </a></li><br>
						<h5>_______________</h5><br>
						<li><a href="Aplist.php"> PATIENT </a></li>
						<h5>_______________</h5><br>
						<li><a href="Appointlst.php"> APPOINTMENT </a></li>
						<h5>_______________</h5><br>
						</ul>
						</div>
				</li>
				<li><a href="#">FEEDBACK</a></li>
				<li><a href="logout.php">LOGOUT</a></li>
			</div>

			<div class="dlist">
				<h1>Doctors Information</h1>
				<table border="2" class="tbladj" bordercolor="grey">
					<tr>
						<th>Doctor ID</th>
						<th>Doctor Name</td>
						<th>Email</th>
						<th>Address</th>
						<th>Contact Number</th>
						<th>Password</th>
						<th>Category</th>
						<th>Edit</th>

					</tr>
					<?php 
						include("dacon.php");
						$q="select * from doctor";
						$r=mysql_query($q);
						while($row=mysql_fetch_row($r))
						echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td><a href='Dedit.php'><img src='edit.png' height='20' width='60'></a></td>";
						echo "</table";
					?>
				</table>
				<div>
</header>			
 </body>
</html>