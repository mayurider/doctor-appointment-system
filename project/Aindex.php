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
					<a href="Aindex.php">ADD/DELETE DOCTOR</a>
				</li>
				<li>
					<a href="#">VIEW ></a>
						<div class="sub-menu-1">
						<ul>
						<h5>_______________</h5><br>
						<li><a href="Adlist.php"> DOCTOR </a></li><br>
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
			<div class="form-box-2">
				<div>
					<form class="input-grp-1">
						<div class="ALtitle-1"><h4>ADD DOCTOR</h4></div>
						<input type="number" class="input-field" name="did" placeholder="Doctor Id" required> 
						<input type="text" name="dnm" class="input-field" placeholder="Doctor Name" required>
						<input type="email" name="del" class="input-field" placeholder="Email" required>
						<input type="text" name="dadd" class="input-field" placeholder="Address" required>
						<input type="tel" name="dnu" class="input-field" placeholder="Contact number" required maxlength="10">
						<input type="password" name="dpass" class="input-field" placeholder="Password" required maxlength="8"><br>
						<select class="input-field" name="dcat" placeholder="Category" required>
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
						</select><br>
						<button type="submit" class="sub-btn-2">ADD</button>
					</form>	
				</div>
			</div>
	
			</ul>
		</div>
		<div class="form-box-3">
			<div>
				<div class="ALtitle-2">
					<h4>DELETE DOCTOR</h4>
					<form class="input-grp-2" method="post">
						<input type="number" class="input-field" name="idurl"  placeholder="Doctor Id" required><br>
						<button type="submit" class="sub-btn-3">DELETE</button>
					</form>	
					</div>
	</div>
	</div>
		
    </header>
 </body>
</html>
<?php 
	include("dacon.php");
	session_start();
	$id=$_REQUEST['did'];
	$nm=$_REQUEST['dnm'];
	$eid=$_REQUEST['del'];
	$add=$_REQUEST['dadd'];
	$cnum=$_REQUEST['dnu'];
	$pass=$_REQUEST['dpass'];
	$btp=$_REQUEST['dcat'];
	$_SESSION['DoctorID']=$id;
	$_SESSION['Doctorname']=$nm;
	$_SESSION['Doctorname']=$eid;
	$_SESSION['Address']=$add;
	$_SESSION['ContactNumber']=$cnum;
	$_SESSION['categorey']=$btp;
	echo $qu= "insert into doctor(DoctorID,Doctorname,email,Address,ContactNumber,password,categorey)value('$id','$nm','$eid','$add','$cnum','$pass','$btp')";
	echo $data= mysql_query($qu);
	if($data)
	{
		echo "inserted";
		header("location:Aindex.php");
	}
?>
<?php
	include("dacon.php");
		$i=$_REQUEST['idurl'];
		$dquery="delete from doctor where DoctorID=$i";
		$r=mysql_query($dquery);
		if($r)
		{
			header("location:Aindex.php");
		}
	
?>