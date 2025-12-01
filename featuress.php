<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jobseeker Features</title>
  <style>
    .jobseeker-features {
      background-image: url('background1.jpg'); /* Replace 'background.jpg' with your image path */
      background-size: cover;
      background-position: center;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      color: #333; /* Text color on top of the background image */
    }

    .jobseeker-features h2 {
      font-size: 40px;
      margin-top: 0;
      text-align: center;
    }

    .jobseeker-features ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .jobseeker-features li {
      margin-bottom: 20px;
      background-color: rgba(255, 255, 255, 0.8); /* Background color for each feature box */
      padding: 15px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .jobseeker-features i {
      font-size: 24px;
      color: #666;
      margin-right: 10px;
    }

    .jobseeker-features h3 {
      font-size: 30px;
      font-weight: bold;
      margin-top: 0;
      margin-bottom: 10px;
    }

    .jobseeker-features p {
      font-size: 24px;
      color: black;
      margin: 0;
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
  <!-- Jobseeker Features -->
  <div class="jobseeker-features">
    <h2>Jobseeker Features</h2>
    <ul>
      <li>
        <i class="fa fa-search"></i>
        <h3>Job Search</h3>
        <p>Search for jobs by keyword, location, and category</p>
      </li>
      <li>
        <i class="fa fa-envelope"></i>
        <h3>Job Alerts</h3>
        <p>Receive email alerts for new job openings that match your preferences</p>
      </li>
      <li>
        <i class="fa fa-user"></i>
        <h3>Profile Management</h3>
        <p>Manage your profile and keep your information up-to-date</p>
      </li>
      <li>
        <i class="fa fa-calendar"></i>
        <h3>Interview Scheduler</h3>
        <p>Schedule and manage interviews with potential employers</p>
      </li>
    </ul>
  </div>
  <a href="javascript:history.back()" class="back-button">Back</a>
</body>
</html>