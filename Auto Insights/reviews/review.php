<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review</title>
    <link rel="stylesheet" type="text/css" href="../css/review.css">
</head>

<body class="Create_rev_body">

    <div class="header">
        <div>
          <img class="logo" src="../images/Website Logo.png" alt="Logo">
        </div>
        <div>
          <h1>Auto Insights</h1>
        </div>
        <div>
            <a class="logout-button" href="index.php">Log Out</a>
        </div>
    </div>

    <form action="get" method="post" enctype="multipart/form-data">
        <div class="vehicle-details-section">
            <div class="input-section">
                <h2>Enter your vehicle specifications below</h2>
                <div class="vehicle-dets">
                    <label for="brand">Vehicle Brand:</label>
                    <input type="text" id="brand" name="brand" placeholder="Enter brand">
                </div>

                <div class="vehicle-dets">
                    <label for="model">Vehicle Model:</label>
                    <input type="text" id="model" name="model" placeholder="Enter model">
                </div>

                <div class="vehicle-dets">
                    <label for="year">Vehicle  Year: </label>
                    <input type="text" id="year" name="year" placeholder="Enter model year">
                </div>

                <div class="vehicle-dets">
                    <label for="price">Vehicle Price:</label>
                    <input type="text" id="price" name="price" placeholder="Enter price">
                </div>

                <div class="upload-section">
                    <h2>Upload Picture</h2>
                    <input type="file" id="fileInput" />
                    <label for="fileInput">Choose File</label>
                </div>

                <div class="review-text-section">
                    <div class="review-text">
                        <label for="review">Enter Your Review Text:</label>
                        <textarea id="review_text" name="review" placeholder="Compose your review here"></textarea>
                    </div>

                    <div class="rating-section">
                        <h2>Vehicle Rating (1-10)</h2>
                        <div class="vehicle-dets">
                            <label for="rating">Vehicle Rating:</label>
                            <input type="number" id="rating" name="rating" min="1" max="10" placeholder="Enter Rating">
                        </div>
                    </div>
                </div>

                <button type="button" class="sub_btn" onclick="submitForm()">Submit Review</button>
            </div>
        </div>
    </form>
</body>


<footer id="Website-footer">
    <span id="footer-text">
        Copyright of Auto Insights &copy; 2023</span    >
  </footer>

</html>



















<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form data here
    $brand = $_POST["brand"];
    $model = $_POST["model"];
    $year = $_POST["year"];
    $price = $_POST["price"];

    // Add your logic to process the form data as needed

    // For demonstration purposes, you can simply echo the received data
    echo "Brand: $brand<br>";
    echo "Model: $model<br>";
    echo "Year: $year<br>";
    echo "Price: $price<br>";
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle file upload here
    $target_dir = "uploads/"; // Specify your upload directory
    $target_file = $target_dir . basename($_FILES["fileInput"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["fileInput"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".<br>";
        $uploadOk = 1;
    } else {
        echo "File is not an image.<br>";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.<br>";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileInput"]["size"] > 500000) {
        echo "Sorry, your file is too large.<br>";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.<br>";
    } else {
        if (move_uploaded_file($_FILES["fileInput"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["fileInput"]["name"])) . " has been uploaded.<br>";
        } else {
            echo "Sorry, there was an error uploading your file.<br>";
        }
    }
}



?>


</body>
</html>