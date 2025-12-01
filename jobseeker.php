<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOBSEEKER</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #333;
        padding: 10px;
        color: white;
    }

    .header .logo {
        width: 50px;
        height: 50px;
    }

    .header .website-name {
        flex: 1;
        text-align: center;
        font-size: 24px;
        font-weight: bold; /* Makes the text bold */
    }

    .header a {
        color: white;
        text-decoration: none;
        margin-left: 20px;
        padding: 10px;
        transition: background-color 0.3s ease;
    }

    .header a:hover {
        background-color: #555;
        border-radius: 5px;
    }

    .nav-bar {
        display: flex;
        justify-content: center;
        background-color: #444;
        position: sticky;
    }

    .nav-bar a {
        padding: 14px 20px;
        display: block;
        color: white;
        text-align: center;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .nav-bar a:hover {
        background-color: #555;
    }

    .dropbtn {
        padding: 10px 20px;
        text-transform: uppercase;
        border-radius: 8px;
        font-size: 17px;
        font-weight: 500;
        color: #ffffff80;
        text-shadow: none;
        background: transparent;
        cursor: pointer;
        box-shadow: transparent;
        border: 1px solid #ffffff80;
        transition: 0.5s ease;
        user-select: none;
    }

    .dropbtn:hover,
    .dropbtn:focus {
        color: #ffffff;
        background: #008cff;
        border: 1px solid #008cff;
        text-shadow: 0 0 5px #ffffff, 0 0 10px #ffffff, 0 0 20px #ffffff;
        box-shadow: 0 0 5px #008cff, 0 0 20px #008cff, 0 0 50px #008cff, 0 0 100px #008cff;
    }

    .scrolling-text {
        width: 100%;
        background: #444;
        color: #fff;
        padding: 0.5em 0;
        overflow: hidden;
        white-space: nowrap;
        box-sizing: border-box;
        margin-top: 0.5em;
    }

    .scrolling-text p {
        display: inline-block;
        animation: scroll-text 15s linear infinite;
        font-size: 1em;
        font-weight: bold;
        margin: 0;
    }

    @keyframes scroll-text {
        0% { transform: translateX(100%); }
        100% { transform: translateX(-100%); }
    }

    .slideshow-container {
        position: relative;
        max-width: 100%;
        margin: auto;
    }

    .mySlides {
        display: none;
    }

    .job-list {
        padding: 20px;
    }

    .job-list h2 {
        margin-bottom: 20px;
    }

    .job-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr); /* 2 equal columns */
        gap: 20px; /* Space between items */
    }

    .job-item {
        border: 1px solid #ddd;
        padding: 20px;
        border-radius: 5px;
        transition: transform 0.2s;
    }

    .job-item h3 {
        margin: 0 0 10px;
    }

    .job-item p {
        margin: 0 0 10px;
        color: #666;
    }

    .job-item button {
        padding: 10px;
        border: none;
        background-color: #333;
        color: white;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .job-item button:hover {
        background-color: #555;
    }

    .job-item:hover {
        transform: scale(1.05);
    }

    .role-dropdown {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 5px;
        border: 1px solid #ddd;
        cursor: pointer;
    }
    
    /* Back to Top Button - From Uiverse.io by vinodjangid07 */
    .button {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: rgb(20, 20, 20);
        border: none;
        font-weight: 600;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0px 0px 0px 4px rgba(180, 160, 255, 0.253);
        cursor: pointer;
        transition-duration: 0.3s;
        overflow: hidden;
        position: relative;
        color: white;
    }

    .button:hover {
        width: 140px;
        border-radius: 50px;
        transition-duration: 0.3s;
        background-color: rgb(181, 160, 255);
        align-items: center;
    }

    .button::before {
        position: absolute;
        bottom: -20px;
        content: "Back to Top";
        color: white;
        font-size: 0px;
        transition-duration: 0.3s;
    }

    .button:hover::before {
        font-size: 13px;
        opacity: 1;
        bottom: unset;
        transition-duration: 0.3s;
    }

    /* Center the button vertically */
    .button-container {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-grow: 1;
    }
    
    .footer {
        background-color: #333;
        color: white;
        text-align: center;
        padding: 10px;
    }
</style>

</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $user_message = $_POST['issue'];

    // OpenAI API key
    $apiKey = 'your-api-key-here';

    // OpenAI API endpoint
    $url = 'https://api.openai.com/v1/chat/completions';

    // Set up cURL
    $ch = curl_init($url);

    // Define the request data
    $data = json_encode([
        'model' => 'gpt-4', // Or 'gpt-3.5-turbo' if using the GPT-3.5 model
        'messages' => [
            ['role' => 'system', 'content' => 'You are a helpful assistant.'],
            ['role' => 'user', 'content' => $user_message]
        ]
    ]);

    // Set the headers
    $headers = [
        'Content-Type: application/json',
        'Authorization: Bearer ' . $apiKey
    ];

    // Set up the cURL options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

    // Execute the request
    $response = curl_exec($ch);

    // Close the cURL session
    curl_close($ch);

    // Decode the response
    $response_data = json_decode($response, true);

    // Retrieve the AI's response
    $chatgpt_reply = $response_data['choices'][0]['message']['content'];

    // Show the response
    echo "<p><strong>ChatGPT says:</strong> $chatgpt_reply</p>";
}
?>

    <div class="header">
        <img src="img4.jpg" alt="Logo" class="logo">
        <div class="website-name">JOBSEEKER</div>
        <a href="jobspark.php">
            <button class="dropbtn">Logout</button>
        </a>
    </div>

    <div class="nav-bar">
        <a href="jobseeker.php">Home</a>
        <a href="companies.php">Companies</a>
        <a href="internship.php">Internship</a>
        <a href="contact_us.php">Contact Us</a>
    </div>
    
    <div class="scrolling-text">
        <p>Welcome to JOBSPARK, where your dream job awaits! Explore endless opportunities and ignite your career journey today.</p>
    </div>

    <div class="slideshow-container">
        <div class="mySlides">
            <img src="img1.jpg" style="width:100%">
        </div>
        <div class="mySlides">
            <img src="img5.jpg" style="width:100%">
        </div>
        <div class="mySlides">
            <img src="img30.jpg" style="width:100%">
        </div>
    </div>
    

    <div class="job-list">
        <h2>Job Listings</h2>
        <div class="job-grid">
            <!-- Computer Engineering -->
<div class="department" id="computer-engineering">
    <h2>Computer Engineering</h2>
    <div class="job-item">
        <h3>Software Developer</h3>
        <p>Company: Infosys</p>
        <p>Location: Bangalore</p>
        <p>Responsible for developing, testing, and deploying software solutions.</p>
        <select class="role-dropdown">
            <option value="role1">Front-end Developer</option>
            <option value="role2">Back-end Developer</option>
            <option value="role3">Full-stack Developer</option>
            <option value="role4">Mobile App Developer</option>
            <option value="role5">DevOps Engineer</option>
        </select>
        <a href="registration.php"><button>Apply</button></a>
    </div>
    <!-- Add more Computer Engineering jobs as needed -->
      <!-- Job Item 2 -->
      <div class="job-item">
                <h3>Java Fullstack Developer</h3>
                <p>Company: Tata Consultancy Services</p>
                <p>Location: AP</p>
                <p>A Java Full Stack Developer in Computer Engineering designs, develops, and maintains both frontend and backend applications using Java technologies to deliver comprehensive software solutions.</p>
                <select class="role-dropdown">
                    <option value="role1">java full-stack developer</option>
                    <option value="role2">senior full-stack Developer</option>
                    <option value="role3">java full-stack engineer</option>
                    <option value="role4">java full-stack consltant</option>
                    <option value="role5">java full-stack architect</option>
                </select>
                <a href="registration.php"><button>Apply</button></a>
            </div>
            <!-- Job Item 3 -->
            <div class="job-item">
                <h3>Quality Analyst</h3>
                <p>Company: Infosys</p>
                <p>Location: AP</p>
                <p>A Quality Analyst in Computer Engineering tests and evaluates software and systems to ensure they meet quality standards and function as intended.</p>
                <select class="role-dropdown">
                    <option value="role1">quality assuarance engineer</option>
                    <option value="role2">senior automation assurance engineer</option>
                    <option value="role3">quality assuarance automation engineer</option>
                    <option value="role4">quality assuarance analyst</option>
                    <option value="role5">quality engineer lead</option>
                </select>
                <a href="registration.php"><button>Apply</button></a>
            </div>
            <!-- Job Item 4 -->
            <div class="job-item">
                <h3>System Engineer</h3>
                <p>Company: Accenture</p>
                <p>Location: AP</p>
                <p>A System Engineer in computer engineering designs, implements, and maintains complex systems to ensure their efficiency, reliability, and performance.</p>
                <select class="role-dropdown">
                    <option value="role1">system engineer</option>
                    <option value="role2">Senior system engineer</option>
                    <option value="role3">system inetgration engineer</option>
                    <option value="role4">devops engineer</option>
                    <option value="role5">system Architect</option>
                </select>
                <a href="registration.php"><button>Apply</button></a>
            </div>
            <!-- Job Item 5 -->
            <div class="job-item">
                <h3>Solution Engineering Training</h3>
                <p>Company: Capgemini</p>
                <p>Location: AP</p>
                <p>Solution Engineering Training for Computer Engineering focuses on equipping professionals with skills to design, implement, and optimize technical solutions for complex business problems.</p>
                <select class="role-dropdown">
                    <option value="role1">solution engineer trainer</option>
                    <option value="role2">technial trainer</option>
                    <option value="role3">solution architect trainer</option>
                    <option value="role4">cloud solutions trainer</option>
                    <option value="role5">devops traning specilist</option>
                </select>
                <a href="registration.php"><button>Apply</button></a>
            </div>

</div>

<!-- Electronics and Communication Engineering -->
<div class="department" id="electronics-communication">
    <h2>Electronics and Communication Engineering</h2>
    <div class="job-item">
        <h3>Embedded System Engineer</h3>
        <p>Company: Panasonic</p>
        <p>Location: Hyderabad</p>
        <p>Designs and develops software for embedded systems.</p>
        <select class="role-dropdown">
            <option value="role1">Automotive Systems Engineer</option>
            <option value="role2">IoT Engineer</option>
            <option value="role3">Consumer Electronics Engineer</option>
            <option value="role4">Signal Processing Engineer</option>
            <option value="role5">Hardware Integration Specialist</option>
        </select>
        <a href="registration.php"><button>Apply</button></a>
    </div>
    <!-- Add more Electronics and Communication Engineering jobs as needed -->
      <!-- Job Item 7 -->
      <div class="job-item">
                <h3>Network Planning Engineer</h3>
                <p>Company: ABB</p>
                <p>Location: AP</p>
                <p>A Network Planning Engineer in training for ECE focuses on designing and optimizing network infrastructure to ensure efficient and reliable communication systems.</p>
                <select class="role-dropdown">
                    <option value="role1">network design engineer</option>
                    <option value="role2">network optimization engineer</option>
                    <option value="role3">quality assurance network engineer</option>
                    <option value="role4">network planning starategy starat</option>
                    <opytion value="role5">network capacity planning engineer</opytion>
                </select>
                <a href="registration.php"><button>Apply</button></a>
            </div>
            <!-- Job Item 8 -->
            <div class="job-item">
                <h3>Service Engineer</h3>
                <p>Company: Siemens</p>
                <p>Location: TS</p>
                <p>A Service Engineer for Electrical and Computer Engineering (ECE) provides technical support, maintenance, and repair services for electronic and computer systems and equipment.</p>
                <select class="role-dropdown">
                    <option value="role1">field service engineer</option>
                    <option value="role2">technical service engineer</option>
                    <option value="role3">customer support engineer</option>
                    <option value="role4">maintenance engineer</option>
                    <option value="role5">installation engineer</option>
                </select>
                <a href="registration.php"><button>Apply</button></a>
            </div>
            <!-- Job Item 9 -->
            <div class="job-item">
                <h3>Telecommunication Engineer</h3>
                <p>Company: Bharat Heavy Electricals</p>
                <p>Location: TS</p>
                <p>A Telecommunication Engineer designs, develops, and maintains communication systems and networks to ensure efficient and reliable data transmission.</p>
                <select class="role-dropdown">
                    <option value="role1">Telecommunication network engineer</option>
                    <option value="role2">Telecommunication system engineer</option>
                    <option value="role3">Telecommunication design engineer</option>
                    <option value="role4">Telecommunication project design  engineer</option>
                    <option value="role5">Telecommunication RF design engineer </option>
                </select>
                <a href="registration.php"><button>Apply</button></a>
            </div>
            <!-- Job Item 10 -->
            <div class="job-item">
                <h3>Embedded System Engineer</h3>
                <p>Company: Panasonic</p>
                <p>Location: TS</p>
                <p>An Embedded Systems Engineer designs, develops, and maintains specialized software and hardware for embedded systems in electronics and communication engineering applications.</p>
                <select class="role-dropdown">
                    <option value="role1">system design & development</option>
                    <option value="role2">automative embedded system engineer</option>
                    <option value="role3">medical device embedded system engineer</option>
                    <option value="role4">consume electronics embedded system engineer</option>
                    <option value="role5">industrial automation</option>
                </select>
                <a href="registration.php"><button>Apply</button></a>
            </div>

</div>

<!-- Mechanical Engineering -->
<div class="department" id="mechanical-engineering">
    <h2>Mechanical Engineering</h2>
    <div class="job-item">
        <h3>Mechanical Design Engineer</h3>
        <p>Company: Tata Motors</p>
        <p>Location: Pune</p>
        <p>Responsible for designing and analyzing mechanical systems.</p>
        <select class="role-dropdown">
            <option value="role1">CAD Designer</option>
            <option value="role2">Manufacturing Engineer</option>
            <option value="role3">Testing Engineer</option>
            <option value="role4">Quality Engineer</option>
            <option value="role5">Maintenance Engineer</option>
        </select>
        <a href="registration.php"><button>Apply</button></a>
    </div>
    <!-- Add more Mechanical Engineering jobs as needed -->
      <!-- Job Item 12 -->
      <div class="job-item">
                <h3>Mechanical Engineer</h3>
                <p>Company: Reliance Industries</p>
                <p>Location: AP</p>
                <p>Mechanical engineering involves the design, analysis, and manufacturing of mechanical systems.</p>
                <select class="role-dropdown">
                    <option value="role1">design and development</option>
                    <option value="role2">anaiysis and simulation</option>
                    <option value="role3">manufactering and production</option>
                    <option value="role4">testing and validation</option>
                    <option value="role5">maintenance and support</option>
                </select>
                <a href="registration.php"><button>Apply</button></a>
            </div>
            <!-- Job Item 13 -->
            <div class="job-item">
                <h3>Equipment Engineer</h3>
                <p>Company: TATA Steel</p>
                <p>Location: AP</p>
                <p>An equipment engineer designs, maintains, and optimizes machinery and equipment to ensure optimal efficiency and reliability.</p>
                <select class="role-dropdown">
                    <option value="role1">design and development</option>
                    <option value="role2">installation and commissioning</option>
                    <option value="role3">Maintenance and reliability</option>
                    <option value="role4">Operational Support</option>
                    <option value="role5">performance optimization</option>
                </select>
                <a href="registration.php"><button>Apply</button></a>
            </div>
            <!-- Job Item 14 -->
            <div class="job-item">
                <h3>Assistant Manager</h3>
                <p>Company: Larsen & Toubro</p>
                <p>Location: TS</p>
                <p>An Assistant Manager for Mechanical Engineering oversees project execution, supports team management, and ensures the effective design and maintenance of mechanical systems.</p>
                <select class="role-dropdown">
                    <option value="role1">Project Coordination</option>
                    <option value="role2">Team Supervision</option>
                    <option value="role3">Operational Support</option>
                    <option value="role4">Maintenance Management</option>
                    <option value="role5">Compliance and Safety</option>
                </select>
                <a href="registration.php"><button>Apply</button></a>
            </div>
            <!-- Job Item 15 -->
            <div class="job-item">
                <h3>Framework Designer</h3>
                <p>Company: HCL Tech</p>
                <p>Location: TS</p>
                <p>A Framework Designer oversees the development, implementation, and management of engineering frameworks.</p>
                <select class="role-dropdown">
                    <option value="role1">Conceptual Design</option>
                    <option value="role2">Detailed Design</option>
                    <option value="role3">Analysis and Optimization</option>
                    <option value="role4">Material Selection</option>
                    <option value="role5">Integration and Coordination</option>
                </select>
                <a href="registration.php"><button>Apply</button></a>
            </div>

</div>

<!-- Civil Engineering -->
<div class="department" id="civil-engineering">
    <h2>Civil Engineering</h2>
    <div class="job-item">
        <h3>Structural Engineer</h3>
        <p>Company: Larsen & Toubro</p>
        <p>Location: Chennai</p>
        <p>Designs and ensures stability and strength of structures.</p>
        <select class="role-dropdown">
            <option value="role1">Bridge Design Engineer</option>
            <option value="role2">Building Design Engineer</option>
            <option value="role3">Geotechnical Engineer</option>
            <option value="role4">Infrastructure Planning</option>
            <option value="role5">Survey Engineer</option>
        </select>
        <a href="registration.php"><button>Apply</button></a>
    </div>
    <!-- Add more Civil Engineering jobs as needed -->
       <!-- Job Item 17 -->
       <div class="job-item">
                <h3>Construction Manager</h3>
                <p>Company: Tata Project Limited</p>
                <p>Location: AP</p>
                <p>A Construction Manager for Civil Engineering oversees and coordinates construction projects, ensuring they are completed on time and within budget.</p>
                <select class="role-dropdown">
                    <option value="role1">project planning and coordinating</option>
                    <option value="role2">budget management</option>
                    <option value="role3">safety management</option>
                    <option value="role4">contractor and vendor management</option>
                    <option value="role5">communication and reporting</option>
                </select>
                <a href="registration.php"><button>Apply</button></a>
            </div>
            <!-- Job Item 18 -->
            <div class="job-item">
                <h3>Structural Engineer</h3>
                <p>Company: Arcadis</p>
                <p>Location: TS</p>
                <p>A Structural Engineer in civil engineering designs, analyzes, and ensures the safety and stability of structures such as buildings, bridges, and infrastructure projects.</p>
                <select class="role-dropdown">
                    <option value="role1">design and analysis</option>
                    <option value="role2">meterial selection</option>
                    <option value="role3">structural integrity</option>
                    <option value="role4">collabration and ccoordination</option>
                    <option value="role5">compliance and documentation</option>
                </select>
                <a href="registration.php"><button>Apply</button></a>
            </div>
            <!-- Job Item 19 -->
            <div class="job-item">
                <h3>Consulting Engineer</h3>
                <p>Company: Fluor</p>
                <p>Location: TS</p>
                <p>A Consulting Engineer in Civil Engineering provides expert advice and solutions for the design, planning, and execution of construction projects.</p>
                <select class="role-dropdown">
                    <option value="role1">project planning and  feasibility</option>
                    <option value="role2">design and engineering</option>
                    <option value="role3">regulatory and comliance</option>
                    <option value="role4">project management and ccoordination</option>
                    <option value="role5">quality assurance  risk management</option>
                </select>
                <a href="registration.php"><button>Apply</button></a>
            </div>
            <!-- Job Item 20 -->
            <div class="job-item">
                <h3>Site Engineer</h3>
                <p>Company: Burns & McDonnell</p>
                <p>Location: TS</p>
                <p>A Site Engineer in civil engineering oversees construction projects, ensuring adherence to plans, quality standards, and safety regulations on-site.</p>
                <select class="role-dropdown">
                    <option value="role1">project planning and Coordination</option>
                    <option value="role2">techinical oversight</option>
                    <option value="role3">safety management</option>
                    <option value="role4">budget and resource management</option>
                    <option value="role5">inspection and testing</option>
                </select>
                <a href="registration.php"><button>Apply</button></a>
            </div>

</div>

        </div>
        </div>
        <!-- Back to Top Button -->
        <div class="button-container">
            <button class="button" onclick="scrollToTop()">↑</button>
        </div>
        <div class="footer">
            &copy; 2024 Job Portal. All rights reserved.
        </div>
        <script>
    let slideIndex = 0;
    showSlides();
    function showSlides() {
        let slides = document.getElementsByClassName("mySlides");
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1;
        }    
        slides[slideIndex-1].style.display = "block";  
        setTimeout(showSlides, 2000); // Change image every 2 seconds  
    }
    function scrollToTop() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
    function toggleChatbot() {
            var chatbot = document.getElementById("chatbotContainer");
            chatbot.style.display = (chatbot.style.display === "none" || chatbot.style.display === "") ? "block" : "none";
        }

        function sendMessage() {
            var userInput = document.getElementById("userInput").value;
            var chatbotBody = document.getElementById("chatbotBody");

            if (userInput) {
                // Display user message
                var userMessage = document.createElement("p");
                userMessage.textContent = "You: " + userInput;
                chatbotBody.appendChild(userMessage);

                // Display bot response
                var botResponse = document.createElement("p");
                botResponse.textContent = "Bot: I'm here to help you with job opportunities. Please let me know your requirements!";
                chatbotBody.appendChild(botResponse);

                // Scroll to bottom
                chatbotBody.scrollTop = chatbotBody.scrollHeight;

                // Clear the input
                document.getElementById("userInput").value = "";
            }
        }
    </script>
</body>
</html>
