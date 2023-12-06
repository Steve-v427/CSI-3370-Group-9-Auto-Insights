<?php
if (isset($_POST['submit'])) {
    $file = $_FILES['file'];
    print_r($file);
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');
    if (in_array($fileActualExt, $allowed)){
        if ($fileError === 0){
            if($fileSize < 1000000){
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDesintation = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDesintation);
                header("Location: createReview.php?uploadsuccess");
            } else {
                echo "file is to big";
            }
        } else {
            echo "upload error";
        }
    } else {
        echo "You cannot upload files of this type!";
    }

}
// this is for uploading images for reviews



