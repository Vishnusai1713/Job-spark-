<?php
// Process the form submission

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form values
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $recoveryEmail = $_POST['recovery-email'];
    $department = $_POST['department'];

    // Example of inserting data into a database (ensure proper sanitization for security)
    // Database connection settings (update with your actual database credentials)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "jobspark"; // Replace with your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind the statement to avoid SQL injection
    $stmt = $conn->prepare("INSERT INTO profiles (name, surname, dob, phone, address, email, recovery_email, department) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $name, $surname, $dob, $phone, $address, $email, $recoveryEmail, $department);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Profile created successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the connection
    $stmt->close();
    $conn->close();
}
?>
