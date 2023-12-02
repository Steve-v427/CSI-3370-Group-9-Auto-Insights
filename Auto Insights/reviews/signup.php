<?Php


?>




<!DOCTYPE html>
<html>
<head>
  <title>Sign Up Page</title>
  <link rel="stylesheet" type="text/css" href="../css/signup.css">
  <div class="header">
    <div>
      <img class="logo" src="../images/Website Logo.png" alt="Logo">
    </div>
    <div>
      <h1>Auto Insights</h1>
    </div>
    <div>
      <a class="back-button" href="./review.php">Home</a>
      </div>
  </div>
</head>


<body>
  <div class="redSignUp">
    <h2>Sign Up</h2>
  </div>

  <div class="signup-form">
    <form>
      <div class="signup-row">
        <div class="signup-text">
          <label for="username"><b>Account Username:</b></label>
        </div>
        <div>
          <input type="text" placeholder="Enter Username" name="username" required>
        </div>
      </div>

      <div class="signup-row">
        <div class="signup-text">
          <label for="password"><b>Password:</b></label>
        </div>
        <div>
          <input type="password" placeholder="Enter Password" name="password" required>
        </div>
      </div>

      <div class="signup-row">
        <div class="signup-text">
          <label for="confirm_password"><b>Confirm Password:</b></label>
        </div>
        <div>
          <input type="password" placeholder="Confirm Password" name="confirm_password" required>
        </div>
      </div> 

      <div class="signupbtn-row">
        <button type="submit" class="signupbtn">Create Your Account!</button>
      </div>
    </form>
  </div>
</body>

<footer id="Website-footer">
  <span id="footer-text">
    Copyright of Auto Insights &copy; 2023</span    >
</footer>

</html>
