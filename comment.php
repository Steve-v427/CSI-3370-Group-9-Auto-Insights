<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital@1&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <!--NavBar Section-->
        <div class="navbar">
            <nav class="navigation hide" id="navigation">
                <span class="close-icon" id="close-icon" onclick="showIconBar()"><i class="fa fa-close"></i></span>
                <ul class="nav-list">
                    <li class="nav-item"><a href="reviews.php">Reviews</a></li>
                    <li class="nav-item"><a href="createReview.php">New Review</a></li>
              
                </ul>
            </nav>
            <a class="bar-icon" id="iconBar" onclick="hideIconBar()"><i class="fa fa-bars"></i></a>
            <div class="brand">Comment Section</div>
            <a href="logout.php" id="Comment_Logout">Logout</a>
        </div>
    </header>
    <!--SearchBox Section-->
    <div class="search-box">
        <div>
            <select name="" id="">
                <option value="Everything">Everything</option>
                <option value="Titles">Titles</option>
                <option value="Descriptions">Descriptions</option>
                </select>
                <input type="text" name="q" placeholder="search ...">
                <button><i class="fa fa-search"></i></button>
        </div>
    </div>

    <!-- Inside the container class -->
<div class="container" id="comment_con">
    <!-- Comment Section -->
    <div class="comment-section">
        <h2>Comments</h2>

        <!-- Display existing comments in a table format -->
        <?php
        // Assuming you have a database connection established
        $hostName = "localhost";
        $dbUser = "root";
        $dbPassword = "";
        $dbName = "auto_insights";

        $conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM comments";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<table class='comment' border='1'>";
            echo "<tr><th>User</th><th>Comment Text</th></tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["COMMENT_TEXT"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "No comments yet.";
        }

        mysqli_close($conn);
        ?>
    </div>
    <div>
        <!-- Comment Form -->
        <form action="submit_comment.php" method="post" id="comment_form">
            <label for="user">User:</label>
            <textarea name="user" id="user" rows="1" required></textarea>

            <label for="comment">Add a Comment:</label>
            <textarea name="comment" id="comment-area" rows="4" required></textarea>
            <input type="submit" value="Submit Comment">
        </form>
    </div>
</div>

    <footer>
        <span>&copy;  Auto Insights | All Rights Reserved</span>
    </footer>
    <script src="main.js"></script>
</body>
</html>