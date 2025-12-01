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
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "<div class='message success'>New record created successfully</div>";
            header("refresh:3;url=create.php"); // Redirect to create.php after 3 seconds
        } else {
            echo "<div class='message error'>Error: " . $sql . "<br>" . $conn->error . "</div>";
        }
    } elseif ($action == 'signin') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                echo "<div class='message success'>Login successful</div>";
                header("refresh:3;url=jobseeker.php"); // Redirect to jobseeker.php after 3 seconds
            } else {
                echo "<div class='message error'>Invalid password</div>";
            }
            
        } else {
            echo "<div class='message error'>No user found with this email</div>";
        }
    }
}

$conn->close();
?>

<style>
    .message {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 20px;
        font-size: 24px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
    .message.success {
        background-color: #4CAF50;
        color: white;
    }
    .message.error {
        background-color: #f44336;
        color: white;
    }
</style>
