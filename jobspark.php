<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOBSPARK</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            padding-top: 150px; /* Adjust padding to account for fixed header and nav */
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 1em 0;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .header-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2em;
        }
        .logo {
            display: flex;
            align-items: center;
                    }

            .logo img {
                height: 50px; /* Keeps the image height as specified */
                width: 50px; /* Ensures the image is a square, necessary for a perfect circle */
                margin-right: 10px; /* Keeps the margin as specified */
                border-radius: 50%; /* Makes the image circular */
                object-fit: cover; /* Ensures the image fits within the circle without distortion */
        }


        .website-name {
            font-size: 2.0em;
            font-weight: bold;
            text-align: center;
            flex-grow: 1;
        }

        .dropdown {
            position: relative;
        }

        .dropbtn,
        #btn {
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
        .dropbtn:focus,
        #btn:hover,
        #btn:focus {
            color: #ffffff;
            background: #008cff;
            border: 1px solid #008cff;
            text-shadow: 0 0 5px #ffffff, 0 0 10px #ffffff, 0 0 20px #ffffff;
            box-shadow: 0 0 5px #008cff, 0 0 20px #008cff, 0 0 50px #008cff, 0 0 100px #008cff;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #444;
            min-width: 160px;
            z-index: 1000;
            top: 100%;
            right: 0;
        }

        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            transition: color 0.3s ease, background-color 0.3s ease;
        }

        .dropdown-content a:hover {
            color: #ffcccb;
            background-color: #555;
        }

        .dropdown .show {
            display: block;
        }

        nav {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1em 0;
            background-color: #333;
            position: fixed;
            top: 65px; /* Adjust top position to be below the header */
            width: 100%;
            z-index: 999;
        }

        ul {
            list-style-type: none;
            display: flex;
            align-items: center;
            padding: 0;
            margin: 0;
        }

        ul li {
            margin-right: 25px;
        }

        ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 1.2em;
            padding: 8px 12px;
            position: relative;
            transition: color 0.3s ease, background-color 0.3s ease;
            display: inline-block;
        }

        ul li a::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 3px;
            bottom: 0;
            left: 0;
            background-color: #ffcccb;
            visibility: hidden;
            transition: all 0.3s ease-in-out;
            transform: scaleX(0);
        }

        ul li a:hover::before {
            visibility: visible;
            transform: scaleX(1);
        }

        ul li a:hover {
            color: #ffcccb;
        }

        ul li.active a {
            border-bottom: 2px solid #ffcccb;
        }

        .scrolling-text {
            width: 100%;
            background: #444;
            color: #fff;
            padding: 0.8em 0;
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

        #home {
            position: relative;
            width: 100vw;
            height: 100vh;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
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
            object-fit: cover;
        }

        .blogs-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 150px; /* Adjust margin to account for fixed header and nav */
        }

        .blog {
            border: 1px solid #ccc;
            padding: 1em;
            border-radius: 5px;
            text-align: center;
        }

        .blog h3 {
            font-size: 1.5em;
            margin-bottom: 0.5em;
        }

        .blog p {
            font-size: 1em;
            margin-bottom: 1em;
        }

        .blog-img {
            width: 100%;
            height: 150px;
            object-fit: contain;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .footer-bottom {
            background-color: black;
            color: white;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <div class="header-top">
            <div class="logo">
                <img src="img4.jpg" alt="Logo">
            </div>
            <div class="website-name">JOBSPARK</div>
            <div class="dropdown">
                <button class="dropbtn">Login</button>
                <div class="dropdown-content">
                    <a href="signup.php">JOB SEEKER</a>
                    <a href="signup1.php">JOB PROVIDER</a>
                </div>
            </div>
        </div>
    </header>

    <nav>
        <ul>
            <li><a href="jobspark.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="requirements.php">Requirements</a></li>
            <li><a href="companies.php">Company</a></li>
            <li><a href="achievements.php">Achievements</a></li>
        </ul>
    </nav>

    <div class="scrolling-text">
        <p>Welcome to JOBSPARK, where your dream job awaits! Explore endless opportunities and ignite your career journey today.</p>
    </div>

    <section id="home" class="slideshow">
        <div class="slide fade">
            <img src="img1.jpg" alt="Slide 1">
        </div>
        <div class="slide fade">
            <img src="img2.jpg" alt="Slide 2">
        </div>
        <div class="slide fade">
            <img src="img3.jpg" alt="Slide 3">
        </div>
        <div class="slide fade">
            <img src="img6.jpg" alt="Slide 4">
        </div>
        <div class="slide fade">
            <img src="img7.jpg" alt="Slide 5">
        </div>
    </section>

    
    <section id="blogs" class="blogs">
        <h2>FEATURES</h2>
        <div class="blogs-grid">
            <div class="blog">
                <img src="img4.jpg" alt="Jobspark" class="blog-img">
                <h3>JOBSPARK</h3>
                <p>Features of Jobspark <a href="features.php">Read more</a></p>
            </div>
            <div class="blog">
                <img src="img32.jpg" alt="Jobseeker" class="blog-img">
                <h3>JOBSEEKER</h3>
                <p>Features of Jobseeker <a href="featuress.php">Read more</a></p>
            </div>
            <div class="blog">
                <img src="img29.jpg" alt="Jobprovider" class="blog-img">
                <h3>JOBPROVIDER</h3>
                <p>Features of Jobprovider <a href="featuresp.php">Read more</a></p>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-bottom text-center">
            <p>&copy; 2024 JOBSPARK. All rights reserved.</p>
        </div>
    </footer>

    <script>
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
            setTimeout(showSlides, 3000); // Change image every 3 seconds
        }

        window.onscroll = function() {highlightNav()};

        function highlightNav() {
            let sections = document.querySelectorAll('section');
            let navLinks = document.querySelectorAll('nav ul li a');

            sections.forEach(section => {
                let rect = section.getBoundingClientRect();
                let id = section.getAttribute('id');
                if (rect.top <= 50 && rect.bottom >= 50) {
                    navLinks.forEach(link => {
                        link.parentElement.classList.remove('active');
                        if (link.getAttribute('href').substring(1) === id) {
                            link.parentElement.classList.add('active');
                        }
                    });
                }
            });
        }

        // Dropdown functionality
        document.addEventListener("DOMContentLoaded", function() {
            // Get the login dropdown link
            const dropdownLink = document.querySelector('.dropdown .dropbtn');

            // Get the dropdown content
            const dropdownContent = document.querySelector('.dropdown .dropdown-content');

            // Toggle dropdown visibility on click
            dropdownLink.addEventListener('click', function() {
                dropdownContent.classList.toggle('show');
            });

            // Close the dropdown if the user clicks outside of it
            window.onclick = function(event) {
                if (!event.target.matches('.dropbtn')) {
                    const dropdowns = document.getElementsByClassName('dropdown-content');
                    for (let dropdown of dropdowns) {
                        if (dropdown.classList.contains('show')) {
                            dropdown.classList.remove('show');
                        }
                    }
                }
            }
        });
    </script>
</body>
</html>
