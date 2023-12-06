<?php
// Directory to store the reviews
$reviewsDirrating = 'reviewsRating/';

// Ensure the directory exists, create it if not
if (!file_exists($reviewsDirrating)) {
    mkdir($reviewsDirrating, 0777, true);
}

// Function to display a specific review file
function displayRating($index) {
    global $reviewsDirrating;

    // Get all files in the folder
    $files = scandir($reviewsDirrating);

    // Filter out non-review files based on the filename pattern
    $reviewFiles = preg_grep('/^reviewRating_\d+\.txt$/', $files);

    // Sort review files based on timestamp
    usort($reviewFiles, function($a, $b) {
        return filemtime($GLOBALS['reviewsDirrating'] . $a) < filemtime($GLOBALS['reviewsDirrating'] . $b);
    });

    // Display the specified review if available
    if (!empty($reviewFiles) && isset($reviewFiles[$index])) {
        $selectedReview = $reviewFiles[$index];
        $reviewContent = file_get_contents($reviewsDirrating . $selectedReview);
        echo "$reviewContent";
        // echo "Review #$index: $reviewContent";
    } else {
        echo "~";
    }
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the sentence from the form
    $sentence = $_POST["sentence"];

    // Generate a unique filename based on timestamp
    $filename = $reviewsDirrating . 'reviewRating_' . time() . '.txt';

    // Write the sentence to the file
    file_put_contents($filename, $sentence);

    echo "Review successfully stored in the file: $filename";
}
?>
