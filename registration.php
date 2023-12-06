<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign Up Page</title>
  <link rel="stylesheet" type="text/css" href="css/signup.css">
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
        if (isset($_POST["submit"])) {
           $fullName = $_POST["fullname"];
           $email = $_POST["email"];
           $password = $_POST["password"];
           $passwordRepeat = $_POST["repeat_password"];
           
           $passwordHash = password_hash($password, PASSWORD_DEFAULT);

           $errors = array();
           
           if (empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
            array_push($errors,"All fields are required");
           }
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email is not valid");
           }
           if (strlen($password)<8) {
            array_push($errors,"Password must be at least 8 charactes long");
           }
           if ($password!==$passwordRepeat) {
            array_push($errors,"Password does not match");
           }
           require_once "database.php";
           $sql = "SELECT * FROM users WHERE email = '$email'";
           $result = mysqli_query($conn, $sql);
           $rowCount = mysqli_num_rows($result);
           if ($rowCount>0) {
            array_push($errors,"Email already exists!");
           }
           if (count($errors)>0) {
            foreach ($errors as  $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
           }else{
            
            $sql = "INSERT INTO users (full_name, email, password) VALUES ( ?, ?, ? )";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"sss",$fullName, $email, $passwordHash);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>You are registered successfully.</div>";
            }else{
                die("Something went wrong");
            }
           }
           header("Location: login.php");
           exit();

        }
        ?>

  <div class="redSignUp">
    <h2>Sign Up</h2>
  </div>

  <div class="signup-form">
    <form action="registration.php" method="post">

    <div class="signup-row">
        <div class="signup-text">
          <label for="username"><b>Full Name:</b></label>
        </div>
        <div>
          <input type="text" placeholder="Full Name:" name="fullname" required>
        </div>
      </div>

      <div class="signup-row">
        <div class="signup-text">
          <label for="email"><b>Email:</b></label>
        </div>
        <div>
          <input type="text" placeholder="Enter Email" name="email" required>
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
          <input type="password" placeholder="Confirm Password" name="repeat_password" required>
        </div>
      </div> 

      <div class="signupbtn-row">
        <button type="submit" class="signupbtn" value="Register" name="submit">Create Your Account!</button>
      </div>

      <div class="signupbtn-row">
       <p>Already Registered <a href="login.php">Login Here</a></p>
      </div>
    </form>
  </div>
</body>
</html>
