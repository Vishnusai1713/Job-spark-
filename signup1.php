<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sliding Login and Signup Form</title>
    <style>
        /* Existing CSS code */
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: #f6f5f7;
        }

        .container {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 
                        0 10px 10px rgba(0, 0, 0, 0.22);
            position: relative;
            overflow: hidden;
            width: 768px;
            max-width: 100%;
            min-height: 480px;
        }

        .form-container {
            position: absolute;
            top: 0;
            height: 100%;
            transition: all 0.6s ease-in-out;
        }

        .sign-up-container {
            left: 0;
            width: 50%;
            opacity: 0;
            z-index: 1;
        }

        .sign-in-container {
            left: 0;
            width: 50%;
            z-index: 2;
        }

        .container.right-panel-active .sign-up-container {
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
            animation: show 0.6s;
        }

        .container.right-panel-active .sign-in-container {
            transform: translateX(100%);
        }

        .overlay-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: transform 0.6s ease-in-out;
            z-index: 100;
        }

        .container.right-panel-active .overlay-container {
            transform: translateX(-100%);
        }

        .overlay {
            background: #FF416C;
            background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
            background: linear-gradient(to right, #FF4B2B, #FF416C);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0 0;
            color: #FFFFFF;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .container.right-panel-active .overlay {
            transform: translateX(50%);
        }

        .overlay-panel {
            position: absolute;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 0 40px;
            text-align: center;
            top: 0;
            height: 100%;
            width: 50%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .overlay-left {
            transform: translateX(-20%);
        }

        .container.right-panel-active .overlay-left {
            transform: translateX(0);
        }

        .overlay-right {
            right: 0;
            transform: translateX(0);
        }

        .container.right-panel-active .overlay-right {
            transform: translateX(20%);
        }

        form {
            background-color: #FFFFFF;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 0 50px;
            height: 100%;
            text-align: center;
        }

        input, select {
            background-color: #eee;
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            width: 100%;
        }

        button {
            border-radius: 20px;
            border: 1px solid #FF4B2B;
            background-color: #FF4B2B;
            color: #FFFFFF;
            font-size: 12px;
            font-weight: bold;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;
        }

        button.ghost {
            background-color: transparent;
            border-color: #FFFFFF;
        }

        button:active {
            transform: scale(0.95);
        }

        button:focus {
            outline: none;
        }

        h1 {
            font-weight: bold;
            margin: 0;
        }

        p {
            font-size: 14px;
            font-weight: 100;
            line-height: 20px;
            letter-spacing: 0.5px;
            margin: 20px 0 30px;
        }

        @keyframes show {
            0%, 49.99% {
                opacity: 0;
                z-index: 1;
            }
            50%, 100% {
                opacity: 1;
                z-index: 5;
            }
        }

        .show-password {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }

        .show-password input {
            width: auto;
            margin: 0 10px 0 0;
        }

        .dob-container, .gender-container {
            display: flex;
            justify-content: space-between;
            width: 100%;
            margin-top: 10px;
        }

        .dob-container select {
            width: 30%;
        }

        .gender-container {
            justify-content: space-between;
            width: 60%;
            margin-top: 10px;
        }

        .gender-container label {
            margin: 0;
        }

        select {
            width: 100%;
            padding: 12px 15px;
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container sign-up-container">
            <form action="process1.php" method="POST">
                <h1>Create Account</h1>
                <input type="hidden" name="action" value="signup" />
                <input type="text" placeholder="Company Name" name="company_name" required />
                <input type="email" placeholder="Company Email" name="company_email" required />
                <input type="password" placeholder="Password" id="signupPassword" name="password" required />
                <input type="password" placeholder="Confirm Password" id="confirmPassword" name="confirm_password" required />
                
                <!-- Company Type Dropdown -->
                <select name="company_type" required>
                    <option value="" disabled selected>Select Company Type</option>
                    <option value="computer">Computer Engineering</option>
                    <option value="electronics">Electronics and Communication Engineering</option>
                    <option value="mechanical">Mechanical Engineering</option>
                    <option value="civil">Civil Engineering</option>
                </select>

                <div class="show-password">
                    <input type="checkbox" id="toggleSignupPassword" />
                    <label for="toggleSignupPassword">Show Password</label>
                </div>
                <button type="submit">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="process1.php" method="POST">
                <h1>Sign in</h1>
                <input type="hidden" name="action" value="signin" />
                <input type="email" placeholder="Company Email" name="company_email" required />
                <input type="password" placeholder="Password" id="signinPassword" name="password" required />
                <div class="show-password">
                    <input type="checkbox" id="toggleSigninPassword" />
                    <label for="toggleSigninPassword">Show Password</label>
                </div>
                <button type="submit">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome to jobspark</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Welcome to jobspark</h1>
                    <p>Enter your personal details and start your journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.querySelector('.container');

        signUpButton.addEventListener('click', () => {
            container.classList.add('right-panel-active');
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove('right-panel-active');
        });

        document.getElementById('toggleSignupPassword').addEventListener('change', () => {
            const passwordField = document.getElementById('signupPassword');
            passwordField.type = passwordField.type === 'password' ? 'text' : 'password';
        });

        document.getElementById('toggleSigninPassword').addEventListener('change', () => {
            const passwordField = document.getElementById('signinPassword');
            passwordField.type = passwordField.type === 'password' ? 'text' : 'password';
        });
    </script>
</body>
</html>
