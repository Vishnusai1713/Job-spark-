<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jobspark";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get application ID and status from the form submission
$application_id = isset($_POST['application_id']) ? intval($_POST['application_id']) : 0;
$status = isset($_POST['status']) ? $_POST['status'] : '';

// Update the application status in the database
if ($application_id && $status) {
    $sql = "UPDATE applications SET status = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $status, $application_id);
    
    if ($stmt->execute()) {
        echo "Application status updated successfully.";
    } else {
        echo "Error updating status: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Invalid application ID or status.";
}

$conn->close();

// Redirect back to the applications list or details page
header("Location: received_applications.php");
exit;
?>
