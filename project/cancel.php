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
						<li><a href="view.php"> View </a></li><br>
						<h5>_______________</h5><br>
						<li><a href="book.php"> Book</a></li>
						<h5>_______________</h5><br>
						<li class="active"><a href="cancel.php"> Cancel-booking </a></li>
						<h5>_______________</h5><br>
						</ul>
				
				
				
						</div>
				</li>
				<li><a href="#">Search Doctor</a></li>
				<li><a href="logout.php">LOGOUT</a></li>
	
		</div>

			<div class="form-box-3">
			<div>
				<div class="ALtitle-2">
					<h4>CANCEL BOOK</h4>
					<form class="input-grp-2" method="post">
						<input type="number" class="input-field" name="idurl"  placeholder="Appointment Id" required><br>
						<button type="submit" class="sub-btn-3">cancel</button>
					</form>	
					</div>
	</div>
	</div>

		
	
	</header>

 </body>
</html>

<?php
	include("dacon.php");
		$i=$_REQUEST['idurl'];
		$dquery="DELETE FROM bookapp WHERE AppoID='$i' AND patientID=('$m')";
		$r=mysql_query($dquery);
		if($r)
		{
			//header("location:.php");
		}
	
?>