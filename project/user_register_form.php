
<html>
 <head>
	<title>doctor appointment
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
	<header>
		<div class="form-box1">
			<div>
				<div class="butto-box1">
				<div class="extra"></div>
					<ul class="butto-box">
					<li><a href="Plogin.php" class="toggle-btn1">User LogIn</a></li>
					<li class="active"><a href="#" class="toggle-btn1">Register</a></li>
					</ul>
				</div>
				<div class="ALtitle">
					
					
					<form class="input-grp" method="post" action="insert.php" >
					
						


						<p>User Id</p>
						<input type="number" class="input-field" name="UserID" placeholder="Enter Id" required> 
						
						<p>Name</p>
						<input type="text" class="input-field" name="Name" placeholder="Etner Your Name" required> 
						
						<p>Address</p>
						<input type="text" class="input-field" name="Address" placeholder="Etner Your Address" required>
						
						<p>Contact Number</p>
						<input type="number" class="input-field" name="ContactNumber" placeholder="Etner Your Contact" maxlength="10" required> 
						
						<p>Email Id</p>
						<input type="text" class="input-field" name="Email" placeholder="Etner Your Email" required> 
						
						
						<p>Password</p>
						<input type="password" name="password" class="input-field" placeholder="Enter Password" required><br>
						
						<p>Blood Type</p>
						<select class="input-field" placeholder="Category" name="addcategory"required>
						<option selected disabled hidden>Category</option>
						<option>A+</option>
						<option>A-</option>
						<option>B+</option>
						<option>B-</option>
						<option>AB+</option>
						<option>AB-</option>
						<option>O+</option>
						<option>O-</option>
						
						</select><br>
						
						
						
						<p><input type="checkbox" class="chk-bx"><span>Remember Password</span></p><br>
						
						<button type="submit" class="sub-btn1" name="Register">REGISTER</button>
					</form>	
					
					
					</div>
	</div>
	</div>
		</header>
	
	
</body>
</html>
