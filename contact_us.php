<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - JOBSEEKER</title>
    <style>
        /* Base styling for body and container */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #ece9e6, #ffffff);
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .container {
            max-width: 600px;
            width: 90%;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
            transform: scale(1);
            overflow: hidden;
        }

        .container:hover {
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.2);
            transform: scale(1.01);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            font-size: 24px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #666;
            font-weight: bold;
        }

        /* Style for input and textarea */
        input[type="text"], input[type="email"], input[type="tel"], textarea {
            width: 100%;
            padding: 12px;
            border-radius: 5px;
            border: 1px solid #ddd;
            box-sizing: border-box;
            font-size: 16px;
            transition: border 0.3s ease, box-shadow 0.3s ease;
        }

        input[type="text"]:focus, input[type="email"]:focus, input[type="tel"]:focus, textarea:focus {
            border-color: #333;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
        }

        textarea {
            resize: vertical;
            height: 120px;
        }

        /* Button with hover effect */
        button {
            width: 100%;
            padding: 12px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            font-weight: bold;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        button:hover {
            background-color: #555;
            transform: scale(1.05);
        }

        button::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            width: 300%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.2);
            transform: translateX(-50%) scaleX(0);
            transform-origin: left;
            transition: transform 0.5s ease;
        }

        button:hover::before {
            transform: translateX(-50%) scaleX(1);
        }

        /* Success/Error message styles */
        .success, .error {
            text-align: center;
            font-size: 16px;
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            display: inline-block;
            width: 100%;
        }

        .success {
            color: #28a745;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
        }

        .error {
            color: #dc3545;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Contact Us</h2>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Connect to the database
            $conn = new mysqli("localhost", "root", "", "jobspark");

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Prepare and bind
            $stmt = $conn->prepare("INSERT INTO contacts (name, email, phone, issue) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $name, $email, $phone, $issue);

            // Set parameters and execute
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $issue = $_POST['issue'];

            if ($stmt->execute()) {
                echo "<div class='success'>Thank you for reaching out! We have received your details.</div>";
            } else {
                echo "<div class='error'>There was an error submitting your form. Please try again.</div>";
            }

            $stmt->close();
            $conn->close();
        }
        ?>

        <!-- Form for user input -->
        <form method="POST" action="contact_us.php">
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>

    <div class="form-group">
        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required>
    </div>

    <div class="form-group">
        <label for="issue">Describe the Issue:</label>
        <textarea id="issue" name="issue" required></textarea>
    </div>

    <button type="submit">Submit</button>
</form>
    </div>
</body>
</html>
