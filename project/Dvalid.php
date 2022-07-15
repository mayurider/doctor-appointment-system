<?php 
	include("dacon.php");
	session_start();
	if(isset($_REQUEST["dsubmit"]))
	{
		$user=$_REQUEST["did"];
		$pass=$_REQUEST["dnm"];
		$query=mysql_query("select * from doctor where DoctorID='$user' && password='$pass'");
		$rowcount=mysql_num_rows($query);
		if($rowcount==true)
		{
			$_SESSION["DoctorID"]=$user;
			header("location:Dindex.php");
			
			
		}
		else
		{
			
			header("location:incorrect.php");
		}
	}
?>