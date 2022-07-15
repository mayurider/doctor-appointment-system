<?php  
include("dacon.php");
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
					<a>Appointment ></a>
						<div class="sub-menu-1">
						<ul>
						<h5>_______________</h5><br>
						<li><a href="view.php"> View </a></li><br>
						<h5>_______________</h5><br>
						<li class="active"><a href="book.php">Book</a></li>
						<h5>_______________</h5><br>
						<li><a href="cancel.php"> Cancel-booking </a></li>
						<h5>_______________</h5><br>
						</ul>
				
				
				
						</div>
				</li>
				<li><a href="#">Search Doctor</a></li>
				<li><a href="logout.php">LOGOUT</a></li>
		

			

	</div>
	<div class="form-box">
	<div class="input-grp-2">
		<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">


			
		
	   	<select name="categorey" class="input-field">
	   		<option selected disabled hidden>Category</option>
						<option>Cardiologist</option>
						<option>Audiologist</option>
						<option>Dentist</option>
						<option>ENT Specialist</option>
						<option>Gynaecologist</option>
						<option>Orthopaedic surgeon</option>
						<option>Paediatrician</option>
						<option>Psychiatrists</option>
						<option>Veterinarian</option>
						<option>Radiologist</option>
						<option>Pulmonologist</option>
						<option>Endocrinologist</option>
						<option>Oncologist</option>
						<option>Neurologist</option>
						<option>Cardiothoracic</option>

	   	</select>
	
		<button type="submit" name="Search" >Search</button>
		
			









	<?php  

	  if (isset($_POST['Search'])) {

	$categorey = mysql_real_escape_string($_POST['categorey']);
	
	$query2="SELECT * FROM doctor WHERE categorey=('$categorey')";
	$result2=mysql_query($query2);
	?>
	
		<br><br><div> 

			<label>Doctor ID</label>
			

		<select name="docID">
			
	<?php   while ($row2=mysql_fetch_assoc($result2)) {
		?>
		
	 
		<option> <?php echo $row2['DoctorID'] ?> </option>
		
	   
	  
	   <?php 

	} ?>
	 </select>
	 </div>


	<br><br><div>
		<label>Appointment ID</label>
		<input type="text" name="AppoID" >

	</div>




	<br><br><div>
		<label>Date</label>
		<input type="Date" name="Date">

	</div>

	<br><br><div>
		<label>Time</label>
		<input type="Time" name="Time">
	</div>

	<br><br> <div>
			<center><button type="submit" name="Book">BOOK</button></center>
			</div>
	 
	 <?php  
}


	    ?>








</form>
    </header>
 </body>
</html>
<?php
if (isset($_POST['Book'])) {

	



	$AppoID = 	$_REQUEST['AppoID'];
	$usrpro	=	$_REQUEST[$_SESSION["snm"]];
	$Date 	=	$_REQUEST['Date'];
	$Time 	= 	$_REQUEST['Time'];
	
	if (empty($AppoID)) {
	array_push($errors,"Appointment ID is required");
}

if (empty($Date)) {
	array_push($errors,"Date is required");
	# code...
}


if (empty($Time)) {
	array_push($errors,"Time is required");
	# code...
}


if(count($errors)==0){


    $docID = $_REQUEST['docID'];
	echo $sql = "INSERT INTO  bookapp (AppoID, Date, Time, patientID,docID) VALUES ('$AppoID','$Date','$Time','$usrpro','$docID') ";
	echo $result99= mysql_query($sql);

		if ($result99) {
  printf("%d Booked .\n", $mysql->affected_rows);


 

}

	elseif (!$mysql -> query($sql)) {
  printf("%d Can't Book At The Moment.\n", $mysql->affected_rows);
	 } 
	  $_SESSION['AppoID']=$AppoID;
  $_SESSION['success']="you are now logged in";
  header('location:book.php');


 

}

}
?>