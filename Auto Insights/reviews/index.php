<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Insights</title>
</head>



<body>


<?php   
    // Database connection parameters
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "....";

    // Create a connection
    $conn = new mysqli($server, $username, $password, $database);

    // Check the connection
    if ($conn->connect_error) {
        die("Failed to connect to Database: " . $conn->connect_error);
    }

?>



    
</body>
</html>