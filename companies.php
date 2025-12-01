<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url(background1.jpg); /* Replace with your background image URL */
            background-size: cover;
            background-position: center;
        }
        header {
            background-color: rgba(0, 0, 0, 0.7); /* Semi-transparent black background for header */
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        nav {
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black background for nav bar */
            padding: 10px 0;
            text-align: center;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            max-width: 50px;
            margin-left: 20px;
        }
        .logo img {
            max-width: 100%;
            height: auto;
        }
        .site-name {
            color: #fff;
            font-size: 1.5em;
            font-weight: bold;
            margin-right: 20px;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
        }
        nav a:hover {
            background-color: rgba(255, 255, 255, 0.2); /* Hover effect for nav items */
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 0 20px;
            background-color: rgba(255, 255, 255, 0.7); /* Semi-transparent white background for main content */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Box shadow for container */
        }
        .company-list {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        .company-list li {
            margin-bottom: 20px;
            padding: 15px;
            background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent white background for each company */
            border-radius: 5px;
            display: flex;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Box shadow for each company */
        }
        .company-list li img {
            max-width: 100px;
            margin-right: 20px;
            border-radius: 5px;
        }
        .company-info {
            flex: 1;
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
    <nav>
        <div class="logo">
            <img src='img4.jpg'alt="Website Logo">
        </div>
        <div class="site-name">JOBSPARK</div>
        <div class="nav-links">
            <a href="jobspark.php">HOME</a>
            <a href="companies.php">COMPANIES</a>
        </div>
    </nav>
    <div class="container">
        <ul class="company-list">
            <li>
                <img src="img10.jpg" alt="Company A">
                <div class="company-info">
                    <h2>WIPRO</h2>
                    <p><strong>Location:</strong>Andhra Pradeshs</p>
                </div>
            </li>
            <li>
                <img src="img28.jpg" alt="Company B">
                <div class="company-info">
                    <h2>INFOSYS</h2>
                    <p><strong>Location:</strong> Andhra Pradesh</p>
                </div>
            </li>
            <li>
                <img src="img20.jpg" alt="Company C">
                <div class="company-info">
                    <h2>TATA Consultancy</h2>
                    <p><strong>Location:</strong> Andhra pradesh</p>
                </div>
            </li>
            <li>
                <img src="img17.jpg" alt="Company D">
                <div class="company-info">
                    <h2>Accenture</h2>
                    <p><strong>Location:</strong> Andhra Pradesh</p>
                </div>
            </li>
            <li>
                <img src="img18.jpg" alt="Company E">
                <div class="company-info">
                    <h2>Capgemini</h2>
                    <p><strong>Location:</strong> Andhra Pradesh</p>
                </div>
            </li>
 <li>
                <img src="img19.jpg" alt="Company C">
                <div class="company-info">
                    <h2>Samsung Electronics</h2>
                    <p><strong>Location:</strong> Andhra pradesh</p>
                </div>
            </li>
 <li>
                <img src="img11.jpg" alt="Company C">
                <div class="company-info">
                    <h2>ABB India Limited</h2>
                    <p><strong>Location:</strong> Andhra Pradesh</p>
                </div>
            </li>
 <li>
                <img src="img16.jpg" alt="Company C">
                <div class="company-info">
                    <h2>Siemens</h2>
                    <p><strong>Location:</strong> Telangana</p>
                </div>
            </li>
 <li>
                <img src="img15.png" alt="Company C">
                <div class="company-info">
                    <h2>Bharath Heavy Electricals</h2>
                    <p><strong>Location:</strong> Telangana</p>
                </div>
            </li>
 <li>
    <img src="img12.jpg" alt="Company C">
                <div class="company-info">
                    <h2>Panasonic</h2>
                    <p><strong>Location:</strong> Telangana</p>
                </div>
            </li>
 <li>
                <img src="img21.jpg" alt="Company C">
                <div class="company-info">
                    <h2>Tech Mahindra</h2>
                    <p><strong>Location:</strong> Andhra Pradesh</p>
                </div>
            </li>
 <li>
                <img src="img13.jpg" alt="Company C">
                <div class="company-info">
                    <h2>Reliance Industries</h2>
                    <p><strong>Location:</strong> Andhra Pradesh</p>
                </div>
            </li>
 <li>
                <img src="img14.jpg" alt="Company C">
                <div class="company-info">
                    <h2>TATA Steel</h2>
                    <p><strong>Location:</strong> Andhra Pradesh</p>
                </div>
            </li>
 <li>
                <img src="img22.jpg" alt="Company C">
                <div class="company-info">
                    <h2>Larsen&Toubro</h2>
                    <p><strong>Location:</strong>Telangana</p>
                </div>
            </li>
 <li>
                <img src="img23.jpg" alt="Company C">
                <div class="company-info">
                    <h2>HCL Tech</h2>
                    <p><strong>Location:</strong> Telangana</p>
                </div>
            </li>
 <li>
                <img src="img24.jpg" alt="Company C">
                <div class="company-info">
                    <h2>Ultra Tech Cement</h2>
                    <p><strong>Location:</strong> Andhra Pradesh</p>
                </div>
            </li>
 <li>
                <img src="img25.jpg" alt="Company C">
                <div class="company-info">
                    <h2>TATA Project Limited</h2>
                    <p><strong>Location:</strong> Andhra Pradesh</p>
                </div>
            </li>
 <li>
                <img src="img26.jpg" alt="Company C">
                <div class="company-info">
                    <h2>Arcadis</h2>
                    <p><strong>Location:</strong> Telangana</p>
                </div>
            </li>
 <li>
                <img src="img27.jpg" alt="Company C">
                <div class="company-info">
                    <h2>Burns&MC Donnel</h2>
                    <p><strong>Location:</strong> Telangana</p>
                </div>
            </li>
            <li>
                <img src="img31.jpg" alt="Company C">
                <div class="company-info">
                    <h2>MEGHA infrastructure</h2>
                    <p><strong>Location:</strong>Telangana</p>
                </div>
            </li>
        </ul>
</div>
 <a href="javascript:history.back()" class="back-button">Back</a>    
</body>
</html>