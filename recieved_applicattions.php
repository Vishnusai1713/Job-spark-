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
$sql = "SELECT id, name, email, skills, status FROM applications";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Received Applications</title>
    <style>
        /* Your styles here */
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
                    <th>Status</th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                        <td><?php echo htmlspecialchars($row['email']); ?></td>
                        <td><?php echo htmlspecialchars($row['skills']); ?></td>
                        <td><?php echo htmlspecialchars($row['status']); ?></td>
                        <td><a href="applicant_details.php?id=<?php echo $row['id']; ?>">Details</a></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No applications received yet.</p>
    <?php endif; ?>

    <?php $conn->close(); ?>
</body>
</html>
