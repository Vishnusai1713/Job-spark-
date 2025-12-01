<?php
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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];
    
    if ($action == 'signup') {
        $company_name = $_POST['company_name'];
        $company_email = $_POST['company_email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        if ($password !== $confirm_password) {
            echo "<div style='text-align: center; font-size: 20px; color: red;'>Passwords do not match</div>";
            exit;
        }

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO companies (company_name, company_email, password) VALUES ('$company_name', '$company_email', '$hashed_password')";

        if ($conn->query($sql) === TRUE) {
            echo "<div style='text-align: center; font-size: 20px; color: green;'>New record created successfully</div>";
            header("refresh:3;url=signup1.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } elseif ($action == 'signin') {
        $company_email = $_POST['company_email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM companies WHERE company_email='$company_email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                echo "<div style='text-align: center; font-size: 20px; color: green;'>Login successful</div>";
                header("refresh:3;url=jobprovider.php");
            } else {
                echo "<div style='text-align: center; font-size: 20px; color: red;'>Invalid password</div>";
            }
        } else {
            echo "<div style='text-align: center; font-size: 20px; color: red;'>No user found with this email</div>";
        }
    }
}

$conn->close();
?>
