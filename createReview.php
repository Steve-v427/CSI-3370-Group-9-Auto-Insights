<!DOCTYPE html>
<html>
<head>
    <title>Create a New Review</title>
    <link rel="stylesheet" type="text/css" href="css/createReview.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital@1&display=swap" rel="stylesheet">
    <script src="main.js"></script>

    
</head>
<body class="Create_rev_body">
  <!--NavBar Section-->
  
  <div class="navbar">
            <nav class="navigation hide" id="navigation">
                <span class="close-icon" id="close-icon" onclick="showIconBar()"><i class="fa fa-close"></i></span>
                <ul class="nav-list">
                    <li class="nav-item"><a href="comment.php">Comments</a></li>
                    <li class="nav-item"><a href="createReview.php">New Review</a></li>
                    <li class="nav-item"><a href="reviews.php">Reviews</a></li>
                </ul>
            </nav>
            <a class="bar-icon" id="iconBar" onclick="hideIconBar()"><i class="fa fa-bars"></i></a>
            <div class="brand">create review</div>
            <a href="logout.php" id="Log-out-btn">Logout</a>
        </div>


    <div class="vehicle-details-section">
        <div class="input-section">
            <h2>Enter your vehicle specifications below</h2>
            
            <div class="upload-section">
                <h2>Upload Picture</h2>
                <form action="upload.php" method="POST" enctype="multipart/form-data">
                <input type="file" id="image" name="file">
                <button type="submit" name="submit">UPLOAD</button>
  
                 </form>
            </div>

            <div class="vehicle-dets">
            <label for="brand">Vehicle Brand:</label>
                <form id="formBrand" action="process_form_brand.php" method="POST">
                 <input type="text" id="sentence" name="sentence" required>
                
                  </form>
                  </div>

            <div class="vehicle-dets">
            <label for="brand">Vehicle Model:</label>
                <form id="formModel" action="process_form_model.php" method="POST">
                <input type="text" id="sentence" name="sentence" required>
              
                </form>
            </div>

            <div class="vehicle-dets">
            <label for="brand">Vehicle Year:</label>
                <form id="formYear" action="process_form_year.php" method="POST">
                <input type="text" id="sentence" name="sentence" required>
                </form>
            </div>

            <div class="vehicle-dets">
            <label for="brand">Vehicle Price:</label>
                <form id="formPrice" action="process_form_price.php" method="POST">
                <input type="text" id="sentence" name="sentence" required>
                </form>
            </div>

            

            <div class="review-text-section">
                <div class="review-text">
                <form id="formReview" action="process_form.php" method="POST">
                <label for="review">Review Text:</label>
                <input type="text" id="sentence" name="sentence" required>
                </form>
                </div>

                <div class="rating-section">
                    <h2>Vehicle Rating (1-10)</h2>
                    <div class="vehicle-dets">
                <form id="formRating" action="process_form_rating.php" method="POST">
                <input type="text" id="sentence" name="sentence" required>
                </form>
                    </div>
                </div>
            </div>

            <button type="button" class="sub_btn" onclick="submitAllForms()">Submit Review</button>
        </div>
    </div>
</form>
</body>


<footer id="Website-footer">
<span id="footer-text">
    Copyright of Auto Insights &copy; 2023</span    >
</footer>
<script>
    async function submitAllForms() {
        const formBrand = document.getElementById('formBrand');
        const formModel = document.getElementById('formModel');
        const formYear = document.getElementById('formYear');
        const formRating = document.getElementById('formRating');
        const formReview = document.getElementById('formReview');
        const formPrice = document.getElementById('formPrice');

        // Submit formBrand asynchronously
        await fetch(formBrand.action, {
            method: formBrand.method,
            headers: { "Content-type": "application/x-www-form-urlencoded" },
            body: new URLSearchParams(new FormData(formBrand))
        });

        // Submit formModel asynchronously
        await fetch(formModel.action, {
            method: formModel.method,
            headers: { "Content-type": "application/x-www-form-urlencoded" },
            body: new URLSearchParams(new FormData(formModel))
        });

        // Submit formYear asynchronously
        await fetch(formYear.action, {
            method: formYear.method,
            headers: { "Content-type": "application/x-www-form-urlencoded" },
            body: new URLSearchParams(new FormData(formYear))
        });

        // Submit formRating asynchronously
        await fetch(formRating.action, {
            method: formRating.method,
            headers: { "Content-type": "application/x-www-form-urlencoded" },
            body: new URLSearchParams(new FormData(formRating))
        });

         // Submit formReview asynchronously
         await fetch(formReview.action, {
            method: formReview.method,
            headers: { "Content-type": "application/x-www-form-urlencoded" },
            body: new URLSearchParams(new FormData(formReview))
        });

         // Submit formPrice asynchronously
         await fetch(formPrice.action, {
            method: formPrice.method,
            headers: { "Content-type": "application/x-www-form-urlencoded" },
            body: new URLSearchParams(new FormData(formPrice))
        });

        // Optionally, you can perform additional actions after all forms are submitted.
        console.log("All forms submitted successfully!");
    }
</script>
</body>
</html>
