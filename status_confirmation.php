<?php
// Get the status and message from the URL parameters
$status = isset($_GET['status']) ? $_GET['status'] : '';
$message = isset($_GET['message']) ? $_GET['message'] : '';

// Redirect to job provider page after 3 seconds
header("Refresh: 3; url=jobprovider.php"); // Replace with your job provider page URL
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 10px;
            text-align: center;
        }
        .message-box {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
            margin-top: 50px;
        }
        .hired {
            color: #28a745; /* Green for hired */
        }
        .rejected {
            color: #dc3545; /* Red for rejected */
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
        }
    </style>
</head>
<body>
    <div class="message-box">
        <h1>Status Update</h1>
        <p class="<?php echo ($status == 'hired') ? 'hired' : 'rejected'; ?>">
            <?php echo htmlspecialchars($message); ?>
        </p>
        <p>You will be redirected shortly to the job provider page.</p>
    </div>
</body>
</html>
