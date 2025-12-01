<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo and Message Display</title>
    <style>
        /* Reset some default browser styling */
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            text-align: center;
            padding: 20px;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px; /* Space between gallery and button */
        }

        .item {
            flex: 1 1 200px; /* Adjust width as needed */
            max-width: 200px; /* Ensures all images are the same size */
            box-sizing: border-box;
        }

        .photo {
            width: 100%;
            height: 150px; /* Adjust height as needed */
            object-fit: fill; /* Ensures images fit the box without distortion */
            border: 2px solid #ddd;
            border-radius: 10px;
        }

        .message {
            font-size: 1em;
            color: #333;
            margin-top: 10px;
        }

        .back-button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 1em;
            cursor: pointer;
            border-radius: 5px;
        }

        .back-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="gallery">
            <div class="item">
                <img src="img10.jpg" alt="Photo 1" class="photo">
                <p class="message">select for the wipro because of our jobspark </p>
            </div>
            <div class="item">
                <img src="img28.jpg" alt="Photo 2" class="photo">
                <p class="message">select for the infosys because of our jobspark</p>
            </div>
            <div class="item">
                <img src="img14.jpg" alt="Photo 3" class="photo">
                <p class="message">select for the tata steel because of our jobspark</p>
            </div>
            <div class="item">
                <img src="img26.jpg" alt="Photo 4" class="photo">
                <p class="message">select for Arcadis because  of our jobspark</p>
            </div>
        </div>
        <button class="back-button" onclick="window.history.back()">Back</button>
    </div>
</body>
</html>