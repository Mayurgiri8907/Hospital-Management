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
    <h2>login</h2>
    <form action="login_validation.php" methd="post">
      <div class="input-box">
        <input type="text" placeholder="Enter your email" name="email" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Create password" name="password" required>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Register Now">
      </div>
    </form>
  </div>
</body>
</html>