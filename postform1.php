<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post a Job Form</title>
    <style>
         body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-image: url('background1.jpg');
            background-size: cover;
            background-position: center;
        }

        .container {
            width: 80%;
            max-width: 400px;
            margin: 20px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center; /* Center align the content */
        }

        h1, h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        label {
            font-weight: bold;
            display: block;
            text-align: left;
            margin-bottom: 5px;
        }

        input[type=text], input[type=email], input[type=number], select, textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: rgba(255, 255, 255, 0.9);
        }

        input[type=file] {
            margin-top: 5px;
        }

        textarea {
            resize: vertical;
            height: 100px;
            background-color: rgba(255, 255, 255, 0.9);
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="box">
            <h1>Post a Job</h1>
            <form action="submit_job.php" method="POST">
                <label for="job_title">Job Title:</label>
                <input type="text" id="job_title" name="job_title" required><br><br>
                
                <label for="company_name">Company Name:</label>
                <input type="text" id="company_name" name="company_name" required><br><br>

                <label for="job_location">Job Location:</label>
                <input type="text" id="job_location" name="job_location" required><br><br>

                <label for="job_description">Job Description:</label><br>
                <textarea id="job_description" name="job_description" rows="4" cols="50" required></textarea><br><br>

                <label for="salary_range">Salary Range:</label>
                <input type="text" id="salary_range" name="salary_range"><br><br>

                <input type="submit" value="POST">
            </form>
        </div>
    </div>
</body>
</html>
