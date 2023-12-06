<?php
// Directory to store the reviews
$reviewsDiryear = 'reviewsYear/';

// Ensure the directory exists, create it if not
if (!file_exists($reviewsDiryear)) {
    mkdir($reviewsDiryear, 0777, true);
}

// Function to display a specific review file
function displayYear($index) {
    global $reviewsDiryear;

    // Get all files in the folder
    $files = scandir($reviewsDiryear);

    // Filter out non-review files based on the filename pattern
    $reviewFiles = preg_grep('/^reviewYear_\d+\.txt$/', $files);

    // Sort review files based on timestamp
    usort($reviewFiles, function($a, $b) {
        return filemtime($GLOBALS['reviewsDiryear'] . $a) < filemtime($GLOBALS['reviewsDiryear'] . $b);
    });

    // Display the specified review if available
    if (!empty($reviewFiles) && isset($reviewFiles[$index])) {
        $selectedReview = $reviewFiles[$index];
        $reviewContent = file_get_contents($reviewsDiryear . $selectedReview);
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
    $filename = $reviewsDiryear . 'reviewYear_' . time() . '.txt';

    // Write the sentence to the file
    file_put_contents($filename, $sentence);

    echo "Review successfully stored in the file: $filename";
}
?>
