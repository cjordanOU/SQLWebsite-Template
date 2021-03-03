<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require('Includes/metadata.php'); ?>

        <title>Template Webpage - Sign Up</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

        <!-- Styles -->
        <link href="style.css" rel="stylesheet">
    </head>

    <body>
        <?php require('Includes/header.php'); ?>

        <section>
            <div class="container login-area">
                <h1>Sign Up</h1>
                <p>Please fill out this form to create an account</p>
                <form id="signupForm" action="signupProcess.php" method="post">
                    <label>First Name:</label>
                    <input type="text" name="firstName" size="40" title="Enter your first name" required>
                    <br>

                    <label>Middle Initial:</label>
                    <input type="text" name="middleInitial" size="1" title="Enter your middle initial if applicable">
                    <br>

                    <label>Last Name:</label>
                    <input type="text" name="lastName" size="40" title="Enter your last name" required>
                    <br>

                    <label>Date of Birth:</label>
                    <input type="date" name="dateOfBirth" title="Enter your date of birth" required>
                    <br>

                    <label>Gender:</label>
                    <select name="gender" title="Select your applicable gender" required>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>
                    <br>

                    <label>Home Address:</label>
                    <input type="text" name="homeAddress" size="40" title="Enter your home address" required>
                    <br>

                    <label>Email Address:</label>
                    <input type="text" name="email" size="40" title="Enter your email address" required>
                    <br>

                    <label>Username:</label>
                    <input type="text" name="email" size="40" title="Create your username" required>
                    <br>

                    <label>Password:</label>
                    <input type="password" name="password1" size="40" title="Create your password" required>
                    <br>

                    <label>Re-enter Password:</label>
                    <input type="password" name="password2" size="40" title="Re-enter your created password" required>
                    <br>

                    <input type="submit" title="Click here to submit the entered data" name="loginSubmit" value="Submit" class="fancyButton-1">
                    <input type="reset" title="Click here to reset all fields in the form" class="fancyButton-2" value="Reset"> 
                </form>
            </div>
        </section>
    </body>
</html>