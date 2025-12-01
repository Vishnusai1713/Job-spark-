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

// Fetch data from the applications table
$sql = "SELECT id, name, email, skills FROM applications";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Received Applications</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 10px;
        }
        h1 {
            font-size: 24px;
            text-align: center;
            margin-bottom: 15px;
        }
        table {
            width: 90%;
            max-width: 800px;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #fff;
            border: 1px solid #ddd;
            font-size: 14px;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: white;
            font-size: 14px;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        p {
            text-align: center;
            font-size: 14px;
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
            position: sticky;
            bottom: 0;
        }
        .back-button:hover {
            background-color: #555;
            color: #fff;
        }
    </style>
</head>
<body>
    <h1>Received Applications</h1>

    <?php if ($result->num_rows > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Skills</th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                        <td><?php echo htmlspecialchars($row['email']); ?></td>
                        <td><?php echo htmlspecialchars($row['skills']); ?></td>
                        <td><a href="applicant_details.php?id=<?php echo $row['id']; ?>">Details</a></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No applications received yet.</p>
    <?php endif; ?>

    <?php $conn->close(); ?>
    <a href="javascript:history.back()" class="back-button">Back</a>
</body>
</html>
