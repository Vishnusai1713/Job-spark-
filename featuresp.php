<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Job Provider Features</title>
  <style>
    .job-provider-features {
      background-image: url('background1.jpg'); /* Replace 'background.jpg' with your image path */
      background-size: cover;
      background-position: center;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      color: #333; /* Text color on top of the background image */
    }

    .job-provider-features h2 {
      font-size: 40px;
      margin-top: 0;
      text-align: center;
    }

    .job-provider-features ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .job-provider-features li {
      margin-bottom: 20px;
      background-color: rgba(255, 255, 255, 0.8); /* Background color for each feature box */
      padding: 15px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .job-provider-features i {
      font-size: 24px;
      color: #666;
      margin-right: 10px;
    }

    .job-provider-features h3 {
      font-size: 30px;
      font-weight: bold;
      margin-top: 0;
      margin-bottom: 10px;
    }

    .job-provider-features p {
      font-size: 24px;
      color: #999;
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
  <!-- Job Provider Features -->
  <div class="job-provider-features">
    <h2>Job Provider Features</h2>
    <ul>
      <li>
        <i class="fa fa-briefcase"></i>
        <h3>Post Job</h3>
        <p>Post job openings and reach a vast pool of talented candidates</p>
      </li>
      <li>
        <i class="fa fa-search"></i>
        <h3>Search Candidates</h3>
        <p>Search and filter candidates based on skills, experience, and location</p>
      </li>
      <li>
        <i class="fa fa-envelope"></i>
        <h3>Receive Applications</h3>
        <p>Receive applications from interested candidates and manage them easily</p>
      </li>
      <li>
        <i class="fa fa-chart-line"></i>
        <h3>Analytics</h3>
        <p>Track views, applications, and other metrics to optimize your job postings</p>
      </li>
    </ul>
  </div>
  <a href="javascript:history.back()" class="back-button">Back</a>
</body>
</html>