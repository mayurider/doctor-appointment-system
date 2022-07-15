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
				<li><a href="searchpatient.php">Search Patient</a></li>
				<li class="active"><a href="add.php">Add Description</a></li>
				<li><a href="logout.php">LOGOUT</a></li>
		

			</div>

		
		
    </header>
	<div class="form-box">
	<form method="post" action="add.php" class="add">







	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">


			<div class="input-grp">
		<label>PatientID</label>
	   	<input type="text" name="Patientsearch" class="">


	</div>





	<div class="input-grp">
		<button type="submit" name="SearchPA" class="sub-btn">Search</button>
	</div>











	<?php  


	  if (isset($_POST['SearchPA'])) {

	$Patientsearch = mysql_real_escape_string($_POST['Patientsearch']);
	
	$query="SELECT * FROM patients WHERE UserID=('$Patientsearch')";
	$result2=mysql_query($query);
	

	
		
	while ($row2=mysql_fetch_assoc($result2)) {
?>

<div class="input-grp">
		<label>Patient ID</label>
		<input type="text" name="descID" value="<?php echo $row2['UserID']; ?>">

	</div>




	<div class="input-grp">
		<label>Name</label>
		<input type="text" name="descName" value="<?php echo $row2['Name']; ?>">

	</div>

	<div class="input-grp">
		<label>Treatment</label>
		<input type="text" name="Treatment">
	</div>

	<div class="input-grp-add">
		<label>Note</label>
		<input style="" type="text" name="Note">
	</div>


	 <div class="input-grp">
			<button type="submit" name="AddD" class="btn">Add</button>
			</div>


	<?php  

	}
	 ?>

			 
	 
		
	   
	  
	 

	 
	
	  
<?php 
}


	    ?>




	    <?php  


if (isset($_POST['AddD'])) {
	include ('../../datalayer/errors.php');
	    	$errors=array();

	$descID 			= mysql_escape_string($_POST['descID']);
	$descName 			= mysql_real_escape_string($_POST['descName']);
	$treatment 			= mysql_real_escape_string($_POST['Treatment']);
	$note				= mysql_real_escape_string($_POST['Note']);

	
	







if (empty($treatment)) {
	array_push($errors,"Treatment is required");
	# code...
}

if (empty($note)) {
	array_push($errors,"Your note is required");
	# code...
}








if(count($errors)==0){



	$sql7 = "INSERT INTO  description (descID,descName,treatment,note,doctorIDdesc) VALUES ('$descID','$descName','$treatment','$note','$doctorprofile') ";
	if (mysql_query($sql7)) { ?>

	<h2 class="thanks"> <?php printf("Your Description Is Added",mysql_affected_rows);?></h2>
			
			
		<?php 



	}
}
}














?>






</div>


</form>
 </body>
</html>
