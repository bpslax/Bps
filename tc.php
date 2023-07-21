<?php
if (isset($_FILES['tc_file'])) {
    $upload_directory = "tc_uploads/"; // Directory where TC files will be stored
    $uploaded_file = $_FILES['tc_file']['name'];
    $uploaded_file_path = $upload_directory . basename($uploaded_file);
    
    // Move the uploaded file to the designated directory
    if (move_uploaded_file($_FILES['tc_file']['tmp_name'], $uploaded_file_path)) {
        // File upload success
        echo "File uploaded successfully!";
    } else {
        // File upload failed
        echo "Error uploading the file.";
    }
}
?>
