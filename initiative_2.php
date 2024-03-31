<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User Sign Up</title>
    <style>
         body {
            background-image: url(./image_back.jpeg);
            background-size: cover;
            background-repeat: no-repeat;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        fieldset {
            border: 2px solid #007bff;
            border-radius: 8px;
            padding: 20px;
        }

        legend {
            font-size: 1.2em;
            color: #007bff;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input {
            width: calc(100% - 16px);
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button, input[type="reset"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button {
            background-color: #007bff;
            color: #fff;
        }

        button:hover {
            background-color: #0056b3;
        }

        input[type="reset"] {
            background-color: #ccc;
            color: #333;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>New User Sign Up</h2>
    <form id="signUpForm" action="#" method="post">
        <fieldset>
            <legend>SIGN IN FORM</legend>
        <label for="name"><b>Name:</b></label> <!-- Added bold style to labels -->
        <input type="text" id="name" name="name" required>

        <label for="email"><b>Email:</b></label>
        <input type="email" id="email" name="email" required>

        <label for="password"><b>Password:</b></label>
        <input type="password" id="password" name="password" required>

        <label for="confirmPassword"><b>Confirm Password:</b></label>
        <input type="password" id="confirmPassword" name="confirmPassword" required>

        <input type="submit" name="submit" value="Sign Up">
    </form>
</div>
</fieldset>
<!--<script>
    document.getElementById('signUpForm').addEventListener('submit', function(event) {
        event.preventDefault();

        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        var confirmPassword = document.getElementById('confirmPassword').value;

        // Perform validation (e.g., password matching)

        // Simulate sign up process (Replace this with actual sign up logic)
        if (password !== confirmPassword) {
            alert('Passwords do not match. Please try again.');
        } else {
            // Submit form or redirect to appropriate page
            alert('Sign up successful! Welcome, ' + name + '!');
            // Redirect to home page or perform further actions
        }
    });
</script>-->
<?php
if(isset($_POST['submit']))
{
    mysqli_query($db, "INSERT INTO `user` VALUES('{$_POST['name']}', '{$_POST['password']}', '{$_POST['email']}')");

}
?>
</body>
</html>
