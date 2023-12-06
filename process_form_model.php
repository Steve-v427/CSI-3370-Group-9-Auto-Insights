<?php
// Directory to store the reviews
$reviewsDirmodel = 'reviewsModel/';

// Ensure the directory exists, create it if not
if (!file_exists($reviewsDirmodel)) {
    mkdir($reviewsDirmodel, 0777, true);
}

// Function to display a specific review file
function displayModel($index) {
    global $reviewsDirmodel;

    // Get all files in the folder
    $files = scandir($reviewsDirmodel);

    // Filter out non-review files based on the filename pattern
    $reviewFiles = preg_grep('/^reviewModel_\d+\.txt$/', $files);

    // Sort review files based on timestamp
    usort($reviewFiles, function($a, $b) {
        return filemtime($GLOBALS['reviewsDirmodel'] . $a) < filemtime($GLOBALS['reviewsDirmodel'] . $b);
    });

    // Display the specified review if available
    if (!empty($reviewFiles) && isset($reviewFiles[$index])) {
        $selectedReview = $reviewFiles[$index];
        $reviewContent = file_get_contents($reviewsDirmodel . $selectedReview);
        echo "$reviewContent";
        // echo "Review #$index: $reviewContent";
    } else {
        echo "Review not yet written!";
    }
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the sentence from the form
    $sentence = $_POST["sentence"];

    // Generate a unique filename based on timestamp
    $filename = $reviewsDirmodel . 'reviewModel_' . time() . '.txt';

    // Write the sentence to the file
    file_put_contents($filename, $sentence);

    echo "Review successfully stored in the file: $filename";
}
?>
