
<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration or Sign Up form in HTML CSS | CodingLab </title> 
    <link rel="stylesheet" href="css\registration.css">
   </head>
<body>
  <div class="wrapper">
    <h2>Registration</h2>
    <form action="registration_validation.php" method="post">
      <div class="input-box">
        <input type="text" placeholder="Enter your name" name="name">
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter your email" name="email">
      </div>
      <div class="input-box">
        <input type="password" placeholder="Create password" name="password">
      </div>
      <div class="input-box">
        <input type="password" placeholder="Confirm password" name="cpassword">
      </div>
      <div class="policy">
        <input type="checkbox">
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Register Now" name="rsubmit">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="login.php">Login now</a></h3>
      </div>
    </form>
  </div>
</body>
</html>