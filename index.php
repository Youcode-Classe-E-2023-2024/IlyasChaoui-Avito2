<?php

include('./includes/config.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Slide Navbar</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <div class="main">
            <!-- Checkbox for triggering animations -->
            <input type="checkbox" id="chk" aria-hidden="true">
    
            <!-- Eye icons for password visibility -->
            <div class="eyes">
                    <img id="OpenEye" src="pictures/open.jpg" alt="" class="open">
                    <img id="CloseEye" src="pictures/close.jpg" alt="" class="close">
            </div>
            <!-- Login form -->
            <div class="signup">
                <form class="form">
                    <label for="chk" aria-hidden="true">Login</label>
                    <input type="email" name="email" placeholder="Email" required="">
                    <div class="password-container">
                        <input class="pswd" type="password" name="pswd" placeholder="Password" required="">
                        <!-- Label and input for toggling password visibility -->
                        <label class="toggle-label" for="toggleBtn">Show Password
                            <input id="toggleBtn" type="checkbox">
                        </label>
                    </div>
                    <button>Login</button>
                </form>
            </div>
    
            <div class="login">
                <form>
                    <label for="chk" aria-hidden="true">Sign up</label>
                    <input type="text" name="txt" placeholder="Username" required="">
                    <select class="role-label" id="gender" name="gender">
                        <option value="male">Role</option>
                        <option value="female">User</option>
                        <option value="non-binary">Announcer</option>
                    </select>
                    <input class="pswd" type="password" name="pswd" placeholder="Password" required="">
                    <input class="pswd" type="password" name="pswd" placeholder="Confirm password" required="">
                    
                    <button>Sign up</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        // Select all elements with the class 'pswd' and add an event listener for the 'input' event
        document.querySelectorAll('.pswd').forEach(function (element) {
            element.addEventListener('input', checkPassword);
        });

        // Function to toggle password visibility
        function togglePasswordVisibility() {
            console.log("hi")
            // Select the password input and the eye icons
            const passwordInput = document.querySelector('.pswd');
            const OpenEye = document.getElementById('OpenEye');
            const CloseEye = document.getElementById('CloseEye');

            // Toggle the password input type between 'password' and 'text'
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                OpenEye.style.display = 'none';
                CloseEye.style.display = 'block';
            } else {
                passwordInput.type = 'password';
                OpenEye.style.display = 'block';
                CloseEye.style.display = 'none';
            }
        }

        // Function to check the password input and toggle eye icons
        function checkPassword() {
            // Select all elements with the class 'pswd'
            const PasswordSpaces = document.querySelectorAll('.pswd');

            // Select eye icons
            const OpenEye = document.getElementById('OpenEye');
            const CloseEye = document.getElementById('CloseEye');

            // Flag to check if any password input is not empty
            let passwordNotEmpty = false;

            // Iterate over each password input
            PasswordSpaces.forEach(function (passwordSpace) {
                // Check if the current password input has a non-zero length
                if (passwordSpace.value.length > 0) {
                    passwordNotEmpty = true;
                }
            });

            // Toggle display of eye icons based on password input
            // if (passwordNotEmpty) {
            //     OpenEye.style.display = 'none';
            //     CloseEye.style.display = 'block';
            // } else {
            //     OpenEye.style.display = 'block';
            //     CloseEye.style.display = 'none';
            // }
        }

        // Add an event listener to the eye icons for toggling password visibility
        // document.getElementById('OpenEye').addEventListener('click', togglePasswordVisibility);
        // document.getElementById('CloseEye').addEventListener('click', togglePasswordVisibility);

        // Add event listener for the toggle button
        document.getElementById('toggleBtn').addEventListener('change', togglePasswordVisibility);

    </script>

</body>

</html>
