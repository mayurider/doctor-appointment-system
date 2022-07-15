<?php 
	include("dacon.php");
	session_start();
	if(isset($_REQUEST["submit"]))
	{
		$user=$_REQUEST["pid"];
		$pass=$_REQUEST["pnm"];
		$query=mysql_query("select * from patients where UserID='$user' && Password='$pass'");
		$rowcount=mysql_num_rows($query);
		if($rowcount==true)
		{
			$_SESSION["snm"]=$user;
			header("location:Pindex.php");
			
			
			
		}
		else
		{
			
			header("location:incorrect.php");
		}
	}
?>