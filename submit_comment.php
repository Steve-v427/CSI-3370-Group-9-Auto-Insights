<?php
// submit_comment.php

// Assuming you have a database connection established
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "auto_insights";

$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Assuming you have user authentication and obtain the user ID
$userID = mysqli_real_escape_string($conn, $_POST['user']);

$commentText = mysqli_real_escape_string($conn, $_POST['comment']);

$sql = "INSERT INTO comments (COMMENT_TEXT, id) VALUES ('$commentText', $userID)";

if (mysqli_query($conn, $sql)) {
    header("Location: comment.php"); // Redirect to the original page
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>