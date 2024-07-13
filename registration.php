<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/css_login.css">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="registration_validation.php" method="post">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="name" placeholder="User name" required="">
					<input type="email" name="email" placeholder="Email" required="">
                    <input type="password" name="password" placeholder="password" required="">
					<input type="password" name="cpassword" placeholder="conform Password" required="">
					<button name="singup">Sign up</button>
				</form>
			</div>

			<div class="login">
				<form action="login_validation.php" method="post">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="name" name="email" placeholder="Email OR Name" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button name="login">Login</button>
				</form>
			</div>
	</div>
</body>
</html>