<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Application Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
        }

        h1 {
            margin-bottom: 20px;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        input, textarea, select {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        input[type="file"] {
            border: none;
        }

        textarea {
            resize: vertical;
        }

        .register-btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .register-btn:hover {
            background-color: #0056b3;
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
    <div class="container">
        <h1>Job Application Form</h1>
        <form action="process_application.php" method="post" enctype="multipart/form-data">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="email">Mail ID:</label>
            <input type="email" id="email" name="email" required>

            <label for="experience">Experience:</label>
            <textarea id="experience" name="experience" rows="4" required></textarea>

            <label for="skills">Skills:</label>
            <input type="text" id="skills" name="skills" placeholder="E.g., JavaScript, PHP, MySQL" required>

            
            <!-- Department Dropdown -->
            <label for="department">Department:</label>
            <select id="department" name="department" required>
                <option value="Computers">Computers</option>
                <option value="Electrical Communication">Electrical Communication</option>
                <option value="Mechanical">Mechanical</option>
                <option value="Civil">Civil</option>
                <option value="Other">Other</option>
            </select>

            <label for="resume">Resume (PDF only):</label>
            <input type="file" id="resume" name="resume" accept=".pdf" required>

            <label for="pic">Profile Picture:</label>
            <input type="file" id="pic" name="pic" accept="image/*" required>

            <button type="submit" class="register-btn">Register</button>
        </form>
        </div>
</body>
</html>
