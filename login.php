<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: reviews.php");
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Sign In Page</title>

  
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <div class="header">
    <div>
      <img class="logo" src="images/autoInsights.png" alt="Logo">
    </div>
    <div>
      <h1>Auto Insights</h1>
    </div>
  </div>
</head>
<body>

<?php
        if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $pass = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($pass, $user["password"])) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: reviews.php");
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }
        }
        ?>

  <div class="redSignIn">
    <h2>Sign In</h2>
  </div>
  <div class="signin-form">
    <form action="login.php" method="post">
      <div class="signin-row">
        <div class="signin-text">
          <label for="username"><b>Account Email:</b></label>
        </div>
        <div>
          <input type="text" placeholder="Enter Email:" name="email" required>
        </div>
      </div>

      <div class="signin-row">
        <div class="signin-text">
          <label for="password"><b>Password:</b></label>
        </div>
        <div>
          <input type="password" placeholder="Enter Password" name="password" required>
        </div>
      </div>

      <div class="signupbtn-row">
        <div class="forgot-text">
          <label><p>Forgot your password? Click here:</p></label>
        </div>
      </div>

      <div class="signupbtn-row">
        <!-- <button type="submit" class="signupbtn">Sign In</button> -->
        <input type="submit" value="Login" name="login" class="btn btn-primary">
      </div>

      <div class="signupbtn-row">
        <div class="forgot-text">
          <label><p>Not registered yet <a href="registration.php">Register Here</a></p></label>
        </div>
      </div>

    
    </form>
    
  </div>
</body>
</html>
