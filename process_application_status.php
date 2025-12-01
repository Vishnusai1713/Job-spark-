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

// Get the application ID and status from the form
$application_id = isset($_POST['application_id']) ? intval($_POST['application_id']) : 0;
$status = isset($_POST['status']) ? $_POST['status'] : 'pending';

// Validate status
if (!in_array($status, ['hired', 'rejected'])) {
    die("Invalid status.");
}

// Update the status in the database
$sql = "UPDATE applications SET status = '$status' WHERE id = $application_id";

if ($conn->query($sql) === TRUE) {
    // Set the message based on status
    if ($status == 'hired') {
        $message = "Applicant has been hired.";
    } else {
        $message = "Applicant has been rejected.";
    }

    // Redirect to a page with the message and then to the job provider page
    header("Location: status_confirmation.php?status=$status&message=" . urlencode($message));
    exit;
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
