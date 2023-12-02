<?php

?>


<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="../css/login.css">
  <title>Login Page</title>
</head>
<body>
  <div class="container">
    <h1>Login</h1>
    <form>
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <button type="submit" class="signinbtn">Sign In</button>
      <button type="button" class="cancelbtn">Cancel</button>
    </form>
    <div style="text-align: center;">
      <p>Don't have an account? <button class="signupbtn" onclick="window.location.href='signup.php'">Sign Up</button></p>
    </div>
  </div>
</body>
</html>
