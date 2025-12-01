<?php
// Database connection
$servername = "localhost";  // Server name or IP address
$username = "root";         // Database username
$password = "";             // Database password
$dbname = "jobspark";       // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$surname = $_POST['surname'];
$dob = $_POST['dob'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$email = $_POST['email'];
$recovery_email = $_POST['recovery-email'];
$passout_year_secondary = $_POST['passout-year'];
$cgpa_secondary = $_POST['cgpa-marks'];

$higher_education = isset($_POST['higher-education']) ? $_POST['higher-education'] : null;
$inter_passout_year = isset($_POST['inter-passout-year']) ? $_POST['inter-passout-year'] : null;
$inter_marks = isset($_POST['inter-marks']) ? $_POST['inter-marks'] : null;

$diploma_passout_year = isset($_POST['diploma-passout-year']) ? $_POST['diploma-passout-year'] : null;
$diploma_branch = isset($_POST['diploma-branch']) ? $_POST['diploma-branch'] : null;
$diploma_avg_marks = isset($_POST['diploma-avg-marks']) ? $_POST['diploma-avg-marks'] : null;

$graduation = isset($_POST['graduation']) ? $_POST['graduation'] : null;
$degree_passout_year = isset($_POST['degree-passout-year']) ? $_POST['degree-passout-year'] : null;
$degree_branch = isset($_POST['diploma-branch']) ? $_POST['diploma-branch'] : null;
$degree_marks = isset($_POST['degree-marks']) ? $_POST['degree-marks'] : null;

$btech_passout_year = isset($_POST['btech-passout-year']) ? $_POST['btech-passout-year'] : null;
$btech_branch = isset($_POST['btech']) ? $_POST['btech'] : null;
$btech_marks = isset($_POST['btech-marks']) ? $_POST['btech-marks'] : null;

$skills = $_POST['skills'];

// Insert into database
$sql = "INSERT INTO profiles (name, surname, dob, phone, address, email, recovery_email, passout_year_secondary, cgpa_secondary, higher_education, inter_passout_year, inter_marks, diploma_passout_year, diploma_branch, diploma_avg_marks, graduation, degree_passout_year, degree_branch, degree_marks, btech_passout_year, btech_branch, btech_marks, skills)
VALUES ('$name', '$surname', '$dob', '$phone', '$address', '$email', '$recovery_email', '$passout_year_secondary', '$cgpa_secondary', '$higher_education', '$inter_passout_year', '$inter_marks', '$diploma_passout_year', '$diploma_branch', '$diploma_avg_marks', '$graduation', '$degree_passout_year', '$degree_branch', '$degree_marks', '$btech_passout_year', '$btech_branch', '$btech_marks', '$skills')";

if ($conn->query($sql) === TRUE) {
    // Display success message and redirect after 3 seconds
    echo "<script>
        alert('Record created successfully.');
        setTimeout(function(){
            window.location.href = 'jobseeker.php';
        }, 3000);
    </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
