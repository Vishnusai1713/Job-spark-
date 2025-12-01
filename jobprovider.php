<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOBPROVIDER</title>
    <style>
    /* Internal CSS */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
    }

    /* Basic styling for the header */
    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #333; /* Dark background color */
        color: #fff; /* Light text color */
        padding: 10px 20px; /* Padding around the content inside header */
    }

    /* Styling for the logo and website name */
    .logo-container {
        display: flex;
        align-items: center;
    }

    .logo {
        display: flex;
        align-items: center;
    }

    .logo img {
        width: 50px; /* Adjust size as per your logo */
        height: 50px; /* Ensures the image is a square */
        margin-right: 10px; /* Space between logo and text */
        border-radius: 50%; /* Makes the image circular */
        object-fit: cover; /* Ensures the image fits within the circle without distortion */
    }

    .logo span {
        font-size: 1.5em; /* Adjust size as per your design */
        font-weight: bold; /* Optionally make text bold */
    }

    /* Styling for the website name in the center */
    .website-name {
        font-size: 1.8em; /* Adjust size as per your design */
        font-weight: bold; /* Optionally make text bold */
        text-align: center;
        flex-grow: 1; /* Allow the website name to grow and take up available space */
    }

    /* Styling for the logout button */
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

    /* Styling for the navigation bar */
    nav {
        display: flex;
        justify-content: center;
        background-color: #444; /* Darker background color for the nav */
        padding: 10px 0; /* Padding around the content inside nav */
    }

    /* Styling for the navigation links */
    ul {
        list-style-type: none;
        display: flex;
        align-items: center;
    }

    ul li {
        margin-right: 20px; /* Space between each navigation item */
    }

    ul li a {
        color: #fff; /* Default link text color (white) */
        text-decoration: none; /* Remove underline */
        font-size: 1em; /* Adjust size as per your design */
        padding: 10px; /* Padding around each link */
        position: relative; /* Ensure proper animation stacking */
        transition: color 0.3s ease-in-out; /* Smooth color transition */
    }

    ul li a::after {
        content: '';
        display: block;
        width: 0;
        height: 2px;
        background-color: #ffcccb; /* Light red underline */
        transition: width 0.3s ease-in-out; /* Smooth underline transition */
        position: absolute;
        left: 0;
        bottom: 0;
    }

    ul li a:hover::after {
        width: 100%; /* Expand the underline to full width on hover */
    }

    ul li a:hover {
        color: #ffcccb; /* Change text color on hover */
    }

    /* Styling for the marquee */
    marquee {
        background-color: black;
        color: white;
        padding: 10px;
        font-size: 1em; /* Adjust size as per your design */
    }

    /* Content section styles */
    .content {
        max-width: 1200px;
        margin: 20px auto;
        padding: 0 20px;
    }

    /* User profiles */
    .user-profiles {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        margin-top: 20px;
    }

    .profile {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .profile h3 {
        font-size: 18px;
        margin-bottom: 10px;
    }

    .profile p {
        font-size: 16px;
        line-height: 1.6;
        margin-bottom: 10px;
    }

    .footer-bottom {
        background-color: black;
        color: white;
        padding: 10px;
        text-align: center; /* Optional: Add padding to give some space around the text */
        width: 100%;
    }

    /* Slideshow styles */
    #home {
        position: relative;
        width: 100vw; /* Full viewport width */
        height: 100vh; /* Full viewport height */
        overflow: hidden; /* Prevent scrollbars */
        display: flex;
        align-items: center; /* Center content vertically */
        justify-content: center; /* Center content horizontally */
    }

    #home .slide {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: none;
    }

    #home .slide img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Ensure images cover the entire slide */
    }
</style>

</head>
<body>
<header>
    <div class="logo-container">
        <div class="logo">
            <img src="img4.jpg" alt="Logo">
        </div>
    </div>
    <div class="website-name">JOBPROVIDER</div>
    <a href="jobspark.php">
    <button class="dropbtn">Logout</button>
</a>


</header>

<nav>
    <ul>
        <li><a href="jobprovider.php">Home</a></li>
        <li><a href="recieve.php">Receive</a></li>
        <li><a href="postform1.php">Post a Job</a></li>
    </ul>
</nav>

<marquee behavior="scroll" direction="left" scrollamount="8" style="background-color: black; color: white; padding: 10px;">
    Welcome to Job Provider - Connecting Employers and Job Seekers widely...
</marquee>

<section id="home" class="slideshow">
    <div class="slide fade">
        <img src="img1.jpg" alt="Slide 1">
    </div>
    <div class="slide fade">
        <img src="img2.jpg" alt="Slide 2">
    </div>
    <div class="slide fade">
        <img src="img30.jpg" alt="Slide 3">
    </div>
</section>

<h2>PROFILES</h2>
<!-- User Profiles -->
<div class="user-profiles">
    <!-- Profile 1 -->
    <div class="profile">
        <h3>SK.ABDULA</h3>
        <p>Email: abu777@gmail.com</p>
        <p>Qualification:B.Tech</p>
        <p>Skills:Circuit Design And Analysis</p>
    </div>

    <!-- Profile 2 -->
    <div class="profile">
        <h3>A.JYOTHI KRISHNA</h3>
        <p>Email: jyothikrishna56@gmail.com</p>
        <p>Qualification:B.Tech</p>
        <p>Skills: Signal Processing</p>
    </div>

    <!-- Profile 3 -->
    <div class="profile">
        <h3>B.NANI BABU</h3>
        <p>Email: nani76@gmail.com</p>
        <p>Qualification:B.Tech</p>
        <p>Skills: Scheduling And Material Selection</p>
    </div>

    <!-- Profile 4 -->
    <div class="profile">
        <h3>B.SHANMUKH</h3>
        <p>Email: shanmukh@gmail.com</p>
        <p>Qualification:B.tech</p>
        <p>Skills: Project Management</p>
    </div>

    <!-- Profile 5 -->
    <div class="profile">
        <h3>ch. venkat sai</h3>
        <p>Email: venkatasai786@gmail.com</p>
        <p>Qualification:B.Tech</p>
        <p>Skills: Computer Aided Design(CAD)</p>
    </div>

    <!-- Profile 6 -->
    <div class="profile">
        <h3>D.Balaji Babu</h3>
        <p>Email: Balaji44@gmail.com</p>
        <p>Qualification:B.Tech</p>
        <p>Skills:Structure Analysis</p>
    </div>

    <!-- Profile 7 -->
    <div class="profile">
        <h3>G.Uday Teja</h3>
        <p>Email: udaynaidu148@gmail.com</p>
        <p>Qualification:B.Tech</p>
        <p>Skills:Software Developer</p>
    </div>

    <!-- Profile 8 -->
    <div class="profile">
        <h3>G.vishnu sai</h3>
        <p>Email: vishnusai1713@gmail.com</p>
        <p>Qualification: B.tech</p>
        <p>Skills:full stack developer</p>
    </div>
</div>

<!-- Footer -->
<div class="footer-bottom">
    <p>&copy; 2024 Job Provider. All rights reserved.</p>
</div>

<!-- Internal JavaScript for Slideshow -->
<script>
    // Slideshow functionality
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let slides = document.getElementsByClassName("slide");
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) { slideIndex = 1 }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 2000); // Change image every 2 seconds

        // Adjust for resizing
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.width = "100%";
            slides[i].style.height = "100vh"; // Ensure slides always fill viewport height
        }
    }
</script>

</body>
</html>
