
<?php 
include('displayImages.php');
include('process_form.php');
include('process_form_brand.php');
include('process_form_model.php');
include('process_form_price.php');
include('process_form_rating.php');
include('process_form_year.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        
    </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/reviews.css">
    <!-- THIS SITE IS GOATED USE THIS FOR REVIEWS https://www.freeiconspng.com/images/car-png -->
</head>

<body>
    <header>
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
            <div class="brand">reviews</div>
            <a href="logout.php" id="Review_logout">Logout</a>
        </div>
        <!--SearchBox Section-->
        <div class="search-box">
            <div>
                <select name="" id="">
                    <option value="Brand">Brand</option>
                    <option value="Model">Model</option>
                    <option value="Year">Year</option>
                    <option value="Price">Price</option>
                    <option value="User">User</option>
                    
                </select>
                <input type="text" name="q" placeholder="search ...">
                <button><i class="fa fa-search"></i></button>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="subreview">
            <div class="subreview-title">
                <h1>Curated Reviews</h1>
            </div>
            <div class="subreview-row">
                <div class="subreview-icon subreview-column center">
                    <div class="containerImg">
                    <a href="" title="Image from freeiconspng.com"><img src="https://www.freeiconspng.com/uploads/land-rover-range-rover-car-png-25.png" width="350" alt="land rover, range rover car png" /></a>
                     </div>
                </div>
                <div class="subreview-description subreview-column">
                    <h4><a href="#">[Land Rover] [Discovery] [2022] [$45,000]</a></h4>
                    <p>Description Content: "An eye-catching orange Land Rover Discovery from 2022, combining luxury and off-road capability for an adventurous driving experience"</p>
                </div>
                <div class="subreview-stats subreview-column center">
                    <span>7.5/10</span>
                </div>
                <div class="subreview-info subreview-column">
                    <b><a href="">Last post</a></b> by <a href="">Admin</a> 
                    <br>on <small>12 Dec 2020</small>
                </div>
            </div>

            <div class="subreview-row">
                <div class="subreview-icon subreview-column center">
                <div class="containerImg">
                <a href="" title="Image from freeiconspng.com"><img src="https://www.freeiconspng.com/uploads/audi-png-auto-car-0.png" width="350" alt="Audi PNG auto car" /></a>
                     </div>
                </div>
                <div class="subreview-description subreview-column">
                    <h4><a href="#">[Audi] [A4] [2020] [$35,000]</a></h4>
                    <p>Description Content: "A sophisticated red Audi A4 sedan from 2020, boasting a perfect blend of performance, style, and cutting-edge technology."</p>
                </div>
                <div class="subreview-stats subreview-column center">
                    <span>5/10</span>
                </div>
                <div class="subreview-info subreview-column">
                    <b><a href="">Last post</a></b> by <a href="">Admin</a> 
                    <br>on <small>12 Dec 2020</small>
                </div>
            </div>

            <div class="subreview-row">
                <div class="subreview-icon subreview-column center">
                <div class="containerImg">
                <a href="" title="Image from freeiconspng.com"><img src="https://www.freeiconspng.com/uploads/volkswagen-car-png-image-7.png" width="350" alt="Volkswagen car PNG image" /></a>
                     </div>
                </div>
                <div class="subreview-description subreview-column">
                <h4><a href="#">[Volkswagen [Jetta] [2019] [$20,500]</a></h4>
                    <p>Description Content: ": A vibrant red Volkswagen Jetta sedan, 2019 model, offering a perfect blend of style, efficiency, and modern features for an enjoyable driving experience."</p>
                </div>
                <div class="subreview-stats subreview-column center">
                    <span>9.2/10</span>
                </div>
                <div class="subreview-info subreview-column">
                    <b><a href="">Last post</a></b> by <a href="">Admin</a> 
                    <br>on <small>12 Dec 2020</small>
                </div>
            </div>

            <div class="subreview-row">
                <div class="subreview-icon subreview-column center">
                <div class="containerImg">

                <a href="" title="Image from freeiconspng.com"><img src="https://www.freeiconspng.com/uploads/car-png-27.png" width="350" alt="Car Png Available In Different Size" /></a>
                     </div>
                </div>
                <div class="subreview-description subreview-column">
                <h4><a href="#">[Mercedes-Benz] [C-Class] [2021] [$40,000]</a></h4>
                    <p>Description Content: "A pristine white Mercedes-Benz C-Class sedan, 2021 model, featuring elegant design, advanced safety features, and a luxurious driving experience."</p>
                </div>
                <div class="subreview-stats subreview-column center">
                    <span>4.75/10</span>
                </div>
                <div class="subreview-info subreview-column">
                    <b><a href="">Last post</a></b> by <a href="">Admin</a> 
                    <br>on <small>12 Dec 2020</small>
                </div>
            </div>

            <div class="subreview-row">
                <div class="subreview-icon subreview-column center">
                <div class="containerImg">
                <a href="" title="Image from freeiconspng.com"><img src="https://www.freeiconspng.com/uploads/yellow-car-png-26.png" width="350" alt="yellow car png" /></a>
                     </div>
                </div>
                <div class="subreview-description subreview-column">
                    <h4><a href="#">[Grand AM] [XY Sedan] [2017] [$19,000]</a></h4>
                    <p>Description Content: "A cheerful yellow sedan, 2023 model, providing a budget-friendly and reliable option for daily commuting with a touch of vibrant style."</p>
                </div>
                <div class="subreview-stats subreview-column center">
                    <span>8.75/10</span>
                </div>
                <div class="subreview-info subreview-column">
                    <b><a href="">Last post</a></b> by <a href="">Admin</a> 
                    <br>on <small>12 Dec 2020</small>
                </div>
            </div>

            <div class="subreview-row">
                <div class="subreview-icon subreview-column center">
                <div class="containerImg">
                <a href="" title="Image from freeiconspng.com"><img src="https://www.freeiconspng.com/uploads/cars-png-31.png" width="350" alt="cars png" /></a>
                     </div>
                </div>
                <div class="subreview-description subreview-column">
                    <h4><a href="#">[BMW] [X5] [2015] [$55,000]</a></h4>
                    <p>Description Content: "A sophisticated gray BMW X5 SUV, 2022 model, combining luxury, performance, and spacious interiors for a superior driving experience."</p>
                </div>
                <div class="subreview-stats subreview-column center">
                    <span>4/10</span>
                </div>
                <div class="subreview-info subreview-column">
                    <b><a href="">Last post</a></b> by <a href="">Admin</a> 
                    <br>on <small>30 Nov 2023</small>
                </div>
            </div>

            <div class="subreview-title">
                <h1>User Reviews</h1>
            </div>

            

            <div class="subreview-row">
                <div class="subreview-icon subreview-column center">
                <div class="containerImg">
                <?php displayImage(0) ?>
                     </div>
                </div>
                <div class="subreview-description subreview-column">
                    <h4><a href="#">[<?php displayBrand(0)  ?>]</a><a>[<?php displayModel(0)  ?>]</a><a>[<?php displayYear(0)  ?>]</a><a>[<?php displayPrice(0)  ?>]</a></h4>
                    <p><?php displayReview(0)  ?></p>
                </div>
                <div class="subreview-stats subreview-column center">
                    <span><?php displayRating(0)  ?>/10</span>
                </div>
                <div class="subreview-info subreview-column">
                    <b><a href="">Last post</a></b> by <a href="">Admin</a> 
                    <br>on <small>30 Nov 2023</small>
                </div>
            </div>

            <div class="subreview-row">
                <div class="subreview-icon subreview-column center">
                <div class="containerImg">
                <?php displayImage(1) ?>
                     </div>
                </div>
                <div class="subreview-description subreview-column">
                    <h4><a href="#">[<?php displayBrand(1)  ?>]</a><a>[<?php displayModel(1)  ?>]</a><a>[<?php displayYear(1)  ?>]</a><a>[<?php displayPrice(1)  ?>]</a></h4>
                    <p><?php displayReview(1)  ?></p>
                </div>
                <div class="subreview-stats subreview-column center">
                    <span><?php displayRating(1)  ?>/10</span>
                </div>
                <div class="subreview-info subreview-column">
                    <b><a href="">Last post</a></b> by <a href="">Admin</a> 
                    <br>on <small>30 Nov 2023</small>
                </div>
            </div>

            <div class="subreview-row">
                <div class="subreview-icon subreview-column center">
                <div class="containerImg">
                <?php displayImage(2) ?>
                     </div>
                </div>
                <div class="subreview-description subreview-column">
                    <h4><a href="#">[<?php displayBrand(2)  ?>]</a><a>[<?php displayModel(2)  ?>]</a><a>[<?php displayYear(2)  ?>]</a><a>[<?php displayPrice(2)  ?>]</a></h4>
                    <p><?php displayReview(2)  ?></p>
                </div>
                <div class="subreview-stats subreview-column center">
                    <span><?php displayRating(2)  ?>/10</span>
                </div>
                <div class="subreview-info subreview-column">
                    <b><a href="">Last post</a></b> by <a href="">Admin</a> 
                    <br>on <small>30 Nov 2023</small>
                </div>
            </div>


    <footer>
        <span>&copy;  Auto Insights | All Rights Reserved</span>
    </footer>
    <script src="main.js"></script>
</body>
</html>