<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Form</title>
    <style>
        body {
            background-image: url(background1.jpg); /* Replace with your background image URL */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
        }

        .form-container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            background-color: rgba(255, 255, 255, 0.8);
            opacity: 0.9;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="date"],
        .form-group input[type="tel"],
        .form-group textarea {
            width: calc(100% - 12px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-group .form-row {
            display: flex;
            gap: 20px;
        }

        .form-group .form-row .form-col {
            padding: 10px;
            flex: 1;
        }

        .form-group .form-row .form-col input,
        .form-group .form-row .form-col select {
            width: calc(100% - 12px);
        }

        .form-group .checkbox-group {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .form-group button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #00b7ff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #003cff;
        }

        .form-group.hidden {
            display: none;
        }

        .error-message {
            color: red;
            display: none;
            margin-top: 10px;
        }
    </style>
    <script>
        function toggleEducationFields(selectedId) {
        const interFields = document.getElementById('inter-fields');
        const diplomaFields = document.getElementById('diploma-fields');

        const interCheckbox = document.getElementById('inter');
        const diplomaCheckbox = document.getElementById('diploma');

        const degreeGroup = document.getElementById('degree-group');
        const degreeCheckbox = document.getElementById('degree');
        const btechCheckbox = document.getElementById('btech');

        // Show the Degree option only if Inter is selected
        if (interCheckbox.checked) {
            degreeGroup.classList.remove('hidden');
            degreeCheckbox.parentElement.style.display = 'block';
        } else {
            degreeCheckbox.checked = false; // Uncheck Degree checkbox if Inter is deselected
            document.getElementById('degree-fields').classList.add('hidden'); // Hide Degree fields
        }

        // Hide the Degree option if Diploma is selected
        if (diplomaCheckbox.checked) {
            degreeCheckbox.parentElement.style.display = 'none';
            degreeCheckbox.checked = false; // Uncheck Degree checkbox
            document.getElementById('degree-fields').classList.add('hidden'); // Hide Degree fields
        }

        // Manage specific field visibility
        if (selectedId === 'inter') {
            interFields.classList.toggle('hidden', !interCheckbox.checked);
            diplomaFields.classList.add('hidden');
            if (interCheckbox.checked) {
                diplomaCheckbox.checked = false; // Uncheck Diploma checkbox
            }
        } else if (selectedId === 'diploma') {
            diplomaFields.classList.toggle('hidden', !diplomaCheckbox.checked);
            interFields.classList.add('hidden');
            if (diplomaCheckbox.checked) {
                interCheckbox.checked = false; // Uncheck Inter checkbox
            }
        }
    }

    function toggleDegreeFields(selectedId) {
        const degreeFields = document.getElementById('degree-fields');
        const btechFields = document.getElementById('btech-fields');
        const degreeCheckbox = document.getElementById('degree');
        const btechCheckbox = document.getElementById('btech');

        if (selectedId === 'degree') {
            degreeFields.classList.toggle('hidden', !degreeCheckbox.checked);
            if (degreeCheckbox.checked) {
                btechCheckbox.checked = false;
                btechFields.classList.add('hidden');
            }
        } else if (selectedId === 'btech') {
            btechFields.classList.toggle('hidden', !btechCheckbox.checked);
            if (btechCheckbox.checked) {
                degreeCheckbox.checked = false;
                degreeFields.classList.add('hidden');
            }
        }
    }


    function validateEmails(event) {
        const email = document.getElementById('email').value;
        const recoveryEmail = document.getElementById('recovery-email').value;
        const errorMessage = document.getElementById('error-message');

        if (email === recoveryEmail && email !== "") {
            event.preventDefault();
            errorMessage.textContent = "Given email and recovery email are the same. Please enter another recovery email.";
            errorMessage.style.display = "block";
        } else {
            errorMessage.style.display = "none";
        }
    }
</script>
</head>
<body>

    <div class="form-container">
        <h2>Create Profile</h2>
        <form action="creates.php" method="POST" onsubmit="validateEmails(event)">
            <!-- Basic details fields -->
            <div class="form-group">
                <div class="form-row">
                    <div class="form-col">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-col">
                        <label for="surname">Surname</label>
                        <input type="text" id="surname" name="surname" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="form-col">
                        <label for="dob">Date of Birth</label>
                        <input type="date" id="dob" name="dob" required>
                    </div>
                    <div class="form-col">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="form-col">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-col">
                        <label for="recovery-email">Recovery Email</label>
                        <input type="email" id="recovery-email" name="recovery-email">
                    </div>
                </div>
            </div>
    
            <!-- Primary Education -->
            <div class="form-group">
                <label for="education">Secondary Education</label>
                <div class="form-row">
                    <div class="form-col">
                        <input type="text" id="passout-year" name="passout-year" placeholder="Passout Year" required>
                    </div>
                    <div class="form-col">
                        <input type="text" id="cgpa-marks" name="cgpa-marks" placeholder="CGPA / Marks" required>
                    </div>
                </div>
            </div>
    
            <!-- Higher Education -->
            <div class="form-group">
                <label>Higher Education</label>
                <div class="checkbox-group">
                    <!-- Higher education checkboxes -->
                    <label><input type="checkbox" id="inter" name="higher-education" value="inter" onclick="toggleEducationFields('inter')"> Inter</label>
                    <label><input type="checkbox" id="diploma" name="higher-education" value="diploma" onclick="toggleEducationFields('diploma')"> Diploma</label>
                </div>
            </div>
    
            <!-- Inter fields -->
            <div id="inter-fields" class="form-group hidden">
                <div class="form-row">
                    <div class="form-col">
                        <label for="inter-passout-year">Passout Year</label>
                        <input type="text" id="inter-passout-year" name="inter-passout-year" placeholder="Passout Year">
                    </div>
                    <div class="form-col">
                        <label for="inter-marks">Marks</label>
                        <input type="text" id="inter-marks" name="inter-marks" placeholder="Marks">
                    </div>
                </div>
            </div>
    
            <!-- Diploma fields -->
            <div id="diploma-fields" class="form-group hidden">
                <div class="form-row">
                    <div class="form-col">
                        <label for="diploma-passout-year">Passout Year</label>
                        <input type="text" id="diploma-passout-year" name="diploma-passout-year" placeholder="Passout Year">
                    </div>
                    <div class="form-col">
                        <label for="diploma-branch">Branch</label>
                        <select id="diploma-branch" name="diploma-branch">
                            <option value="CSE">CSE</option>
                            <option value="ECE">ECE</option>
                            <option value="EEE">EEE</option>
                            <option value="CIVIL">CIVIL</option>
                            <option value="MECH">MECH</option>
                        </select>
                    </div>
                    <div class="form-col">
                        <label for="diploma-avg-marks">Avg Marks</label>
                        <input type="text" id="diploma-avg-marks" name="diploma-avg-marks" placeholder="Avg Marks">
                    </div>
                </div>
            </div>
    
            <!-- Graduation -->
            <div id="degree-group" class="form-group hidden">
                <label>Graduation</label>
                <div class="checkbox-group">
                    <!-- Graduation checkboxes -->
                    <label><input type="checkbox" id="degree" name="graduation" value="degree" onclick="toggleDegreeFields('degree')"> Degree</label>
                    <label><input type="checkbox" id="btech" name="graduation" value="btech" onclick="toggleDegreeFields('btech')"> B.Tech</label>
                </div>
            </div>
    
            <!-- Degree fields -->
            <div id="degree-fields" class="form-group hidden">
                <label for="degree-passout-year">Passout Year</label>
                <input type="text" id="degree-passout-year" name="degree-passout-year" placeholder="Passout Year">
                <div class="form-col">
                    <label for="diploma-branch">Branch</label>
                    <select id="diploma-branch" name="diploma-branch">
                        <option value="CSE">CSE</option>
                        <option value="ECE">ECE</option>
                        <option value="EEE">EEE</option>
                        <option value="CIVIL">CIVIL</option>
                        <option value="MECH">MECH</option>
                    </select>
                </div>
                <label for="degree-marks">Marks</label>
                <input type="text" id="degree-marks" name="degree-marks" placeholder="Marks">
            </div>
    
            <!-- B.Tech fields -->
            <div id="btech-fields" class="form-group hidden">
                <label for="btech-passout-year">Passout Year</label>
                <input type="text" id="btech-passout-year" name="btech-passout-year" placeholder="Passout Year">
                <div class="form-col">
                    <label for="btech-branch">Branch</label>
                    <select id="btech-branch" name="btech">
                        <option value="CSE">CSE</option>
                        <option value="ECE">ECE</option>
                        <option value="EEE">EEE</option>
                        <option value="CIVIL">CIVIL</option>
                        <option value="MECH">MECH</option>
                    </select>
                </div>
                <label for="btech-marks">Marks</label>
                <input type="text" id="btech-marks" name="btech-marks" placeholder="Marks">
            </div>
            
            <div id="error-message" class="error-message"></div>
            <!-- Skills Section -->
            <div class="form-group">
                <label for="skills">Skills</label>
                <textarea id="skills" name="skills" rows="5" placeholder="List your skills here..." required></textarea>
            </div>
             <!-- Department dropdown -->
             <div class="form-group">
                <label for="department">Department</label>
                <select id="department" name="department">
                    <option value="Computers">Computers</option>
                    <option value="Electrical Communication">Electrical Communication</option>
                    <option value="Mechanical">Mechanical</option>
                    <option value="Civil">Civil</option>
                </select>
            </div>

            <div class="form-group">
                <button type="submit">Create Profile</button>
            </div>
        </form>
    </div>
    
</body>
</html>