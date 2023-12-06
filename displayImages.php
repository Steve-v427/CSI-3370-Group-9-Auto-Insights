<?php
// Directory to store the images
$imageFolder = 'uploads/';

// Ensure the directory exists, create it if not
if (!file_exists($imageFolder)) {
    mkdir($imageFolder, 0777, true);
}

// Function to display a specific image from the 'uploads/' folder
function displayImage($index) {
    global $imageFolder;

    $allowedExtensions = array('jpg', 'jpeg', 'png');

    // Get all files in the folder
    $files = scandir($imageFolder);

    // Filter out non-image files based on allowed extensions
    $imageFiles = array_filter($files, function($file) use ($allowedExtensions) {
        $fileExtension = pathinfo($file, PATHINFO_EXTENSION);
        return in_array(strtolower($fileExtension), $allowedExtensions);
    });

    // Sort image files based on timestamp
    usort($imageFiles, function($a, $b) {
        return filemtime($GLOBALS['imageFolder'] . $a) < filemtime($GLOBALS['imageFolder'] . $b);
    });

    // Display the specified image if available
    if (!empty($imageFiles) && isset($imageFiles[$index])) {
        $selectedImage = $imageFiles[$index];
        echo "<img src='$imageFolder$selectedImage' alt='Image'>";
    } else {
        echo "Image Pending...";
    }
}

// Check if the 'index' query parameter is set
if (isset($_GET['index'])) {
    $index = intval($_GET['index']); // Convert to integer for security
    displayImage($index);
} else {
    // echo "Invalid request. Please specify the 'index' parameter.";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the file was uploaded without errors
    if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
        // Retrieve the image details
        $imageTmpName = $_FILES['image']['tmp_name'];

        // Generate a unique filename based on timestamp
        $filename = $imageFolder . 'image_' . time() . '.png';

        // Move the uploaded file to the destination folder
        move_uploaded_file($imageTmpName, $filename);

        echo "Image successfully stored in the file: $filename";
    } else {
        echo "Error uploading image.";
    }
}
?>
