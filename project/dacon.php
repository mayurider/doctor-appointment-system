<?php
	$con=mysql_connect("localhost","root","root");
	if(!$con)
	{
		mysql_error();
	}
	
	if(mysql_select_db("registration", $con))
	{
		echo "";
	}
	else
	{
		mysql_error();
	}
?>