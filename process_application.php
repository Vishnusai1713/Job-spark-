<?php
// Database connection parameters
$servername = "localhost";  // Your MySQL server (e.g., localhost)
$username = "root";         // Your MySQL username
$password = "";             // Your MySQL password
$dbname = "jobspark";       // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data
$name = $_POST['name'];
$dob = $_POST['dob'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$experience = $_POST['experience'];
$skills = $_POST['skills'];

// Handling file uploads
$resume = $_FILES['resume']['name'];
$pic = $_FILES['pic']['name'];

// File upload directories
$target_dir_res = "uploads/resumes/";
$target_dir_pic = "uploads/pictures/";

// Check if directories exist, if not, create them
if (!is_dir($target_dir_res)) {
    mkdir($target_dir_res, 0777, true); // Creates directories with permissions
}

if (!is_dir($target_dir_pic)) {
    mkdir($target_dir_pic, 0777, true); // Creates directories with permissions
}

// Target file paths
$target_file_res = $target_dir_res . basename($resume);
$target_file_pic = $target_dir_pic . basename($pic);

// Move uploaded files to the designated folders
if (move_uploaded_file($_FILES['resume']['tmp_name'], $target_file_res) && 
    move_uploaded_file($_FILES['pic']['tmp_name'], $target_file_pic)) {

    // Insert data into the database, including registration date and time
    $sql = "INSERT INTO applications (name, dob, phone, email, experience, skills, resume, pic, registration_time)
            VALUES ('$name', '$dob', '$phone', '$email', '$experience', '$skills', '$target_file_res', '$target_file_pic', NOW())";

    if ($conn->query($sql) === TRUE) {
        // Display success message and redirect after 3 seconds
        echo "<script>
            alert('Application submitted successfully! Call letter will be sent to your email.');
            setTimeout(function(){
                window.location.href = 'jobseeker.php';
            }, 3000);
        </script>";
    } else {
        echo "Error: " . $sql . '<br>' . $conn->error;
    }

} else {
    echo "<script>alert('Error uploading files. Please check the directory permissions.');</script>";
}

// Close the database connection
$conn->close();
?>
