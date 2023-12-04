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




</body>
</html>
