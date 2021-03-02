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
        <?php include('Includes/header.php'); ?>

        <section>
            <div class="centered container login-area">
                <h1>Sign Up</h1>
                <form id="signupForm" action="signupProcess.php" method="post">
                    <label>First Name:</label>
                    <input type="text" name="firstName" size="40" title="Enter your first name" required>
                    <br>

                    <label>Middle Initial:</label>
                    <input type="text" name="middleInitial" size="1" title="Enter your middle initial if applicable">
                    <br>

                    <label>Last Name:</label>
                    <input type="text" name="lastName" size="40" title="Enter your last name">
                    <br>

                    <label>Date of Birth:</label>
                    <input type="date" name="dateOfBirth" title="Enter your date of birth">
                    <br>

                    <label>Gender:</label>
                    <select name="gender" title="Select your applicable gender" required>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>

                    <label>Home Address:</label>
                    <input type="text" name="homeAddress" size="40" title="Enter your home address">
                    <br>

                    <label>Email Address:</label>
                    <input type="text" name="email" size="40" title="Enter your email address">
                    <br>

                    <label>Username:</label>
                    <input type="text" name="email" size="40" title="Create your username">
                    <br>

                    <label>Password:</label>
                    <input type="password" name="password1" size="40" title="Create your password">
                    <br>

                    <label>Re-enter Password:</label>
                    <input type="password" name="password2" size="40" title="Re-enter your created password">
                    <br>

                    <input type="submit" name="loginSubmit" value="Submit" class="fancyButton-1">
                </form>
            </div>
        </section>
    </body>
</html>