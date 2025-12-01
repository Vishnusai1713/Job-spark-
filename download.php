<?php
if (isset($_GET['file'])) {
    $file = urldecode($_GET['file']); // Decode the file name
    $filepath = __DIR__ . '/uploads/' . $file; // Path to the uploads directory

    // Check if the file exists
    if (file_exists($filepath)) {
        // Set headers to download the file
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="' . basename($filepath) . '"');
        header('Content-Length: ' . filesize($filepath));

        // Read the file
        readfile($filepath);
        exit;
    } else {
        echo "File not found.";
    }
} else {
    echo "No file specified.";
}
?>
