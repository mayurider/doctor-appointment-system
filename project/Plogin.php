<?php
	session_start();
?>
<html>
 <head>
	<title>doctor appointment
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
	<header>
		<div class="form-box">
			<div>
				<div class="butto-box">
				<div class="extra"></div>
					<ul class="butto-box">
					<li class="active"><a href="#" class="toggle-btn">User LogIn</a></li>
					<li><a href="user_register_form.php" class="toggle-btn">Register</a></li>
					</ul>
				</div>
				<div class="ALtitle">
					<form class="input-grp" action="pvalid.php" method="post">
						<p>User Id</p>
						<input type="text" class="input-field" name="pid" id="patientid" placeholder="Etner Id" required> 
						<p>Password</p>
						<input type="password" name="pnm" id="patientnm" class="input-field" placeholder="Enter Password" required><br>
						<p><input type="checkbox" class="chk-bx" name="rem"><span>Remember Password</span></p><br>
						<button type="submit" class="sub-btn" name="submit">LOGIN</button>
					</form>	
					</div>
	</div>
	</div>
		</header>
	
	
</body>
</html>
