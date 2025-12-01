<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = ""; // Default XAMPP password is usually blank
$dbname = "jobspark";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Capture the form data
$job_title = $_POST['job_title'];
$company_name = $_POST['company_name'];
$job_location = $_POST['job_location'];
$job_description = $_POST['job_description'];
$salary_range = $_POST['salary_range'];

// Prepare and bind the SQL statement
$stmt = $conn->prepare("INSERT INTO jobs (job_title, company_name, job_location, job_description, salary_range) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $job_title, $company_name, $job_location, $job_description, $salary_range);

// Execute the statement
if ($stmt->execute()) {
    // Display success message and redirect after 3 seconds
    echo "<script>
        alert('Posted successfully!');
        setTimeout(function(){
            window.location.href = 'jobprovider.php';
        }, 3000);
    </script>";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
