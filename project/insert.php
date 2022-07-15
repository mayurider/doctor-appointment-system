<?php 
	session_start();
	
	include("dacon.php");
	$id=$_REQUEST['UserID'];
	$nm=$_REQUEST['Name'];
	$add=$_REQUEST['Address'];
	$cnum=$_REQUEST['ContactNumber'];
	$eid=$_REQUEST['Email'];
	$pass=$_REQUEST['password'];
	$btp=$_REQUEST['addcategory'];
	$_SESSION["UserID"]=$id;
		$_SESSION["Name"]=$nm;
		$_SESSION["Address"]=$add;
		$_SESSION["ContactNumber"]=$cnum;
		$_SESSION["Email"]=$eid;
		$_SESSION["addcategory"]=$btp;
	
	echo $qu= "insert into patients(UserID,Name,Address,ContactNumber,Email,Password,Bloodtype)value('$id','$nm','$add','$cnum','$eid','$pass','$btp')";
	echo $data= mysql_query($qu);
	if($data)
	{
		echo "inserted";
		header("location:Plogin.php");
	}
	
?>