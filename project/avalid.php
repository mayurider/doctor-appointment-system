<?php 
	include("dacon.php");
	if(isset($_REQUEST["submit"]))
	{
		$user=$_REQUEST["admin_nm"];
		$pass=$_REQUEST["admin_pass"];
		$query=mysql_query("select * from admin where 	AdminID='$user' && adminpassword='$pass'");
		$rowcount=mysql_num_rows($query);
		if($rowcount==true)
		{
			
			header("location:Aindex.php");
		}
		else
		{
			
			header("location:incorrect.php");
		}
	}
?>
