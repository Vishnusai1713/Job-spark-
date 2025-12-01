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

// Fetch applicant details based on ID
$applicant_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$sql = "SELECT * FROM applications WHERE id = $applicant_id";
$result = $conn->query($sql);

// Check if applicant exists
if ($result && $result->num_rows > 0) {
    $applicant = $result->fetch_assoc();
} else {
    die("Applicant not found.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applicant Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 10px;
        }
        .container {
            width: 90%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
        }
        h1 {
            font-size: 24px;
            text-align: center;
            margin-bottom: 15px;
        }
        p {
            font-size: 16px;
            margin: 5px 0;
        }
        .note {
            margin-top: 20px;
            padding: 10px;
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            border-radius: 5px;
        }
        .back-button {
            display: block;
            width: 100px;
            margin: 20px auto;
            padding: 10px 20px;
            text-align: center;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        .back-button:hover {
            background-color: #555;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Applicant Details</h1>
        <p><strong>Name:</strong> <?php echo htmlspecialchars($applicant['name']); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($applicant['email']); ?></p>
        <p><strong>Phone Number:</strong> <?php echo htmlspecialchars($applicant['phone']); ?></p>
        <p><strong>Date of Birth:</strong> <?php echo htmlspecialchars($applicant['dob']); ?></p>
        <p><strong>Skills:</strong> <?php echo htmlspecialchars($applicant['skills']); ?></p>
        <p><strong>Experience:</strong> <?php echo htmlspecialchars($applicant['experience']); ?></p>
        <div class="note">
            <strong>Note:</strong> You have to contact the applicant by the submitted Email ID or phone number. We do not handle further processes.
        </div>
        <a href="javascript:history.back()" class="back-button">Back</a>
    </div>
</body>
</html>

<?php $conn->close(); ?>
