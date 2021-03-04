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
        <?php require('Includes/signupHandler.php'); ?>

        <section>
            <div class="container login-area">
                <h1>Sign Up</h1>
                <p>Please fill out this form to create an account</p>

                <!-- Form is protected from SQL injection by using htmlspecialchars -->
                <form id="signupForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-section">
                        <label>First Name:</label>
                        <input type="text" name="firstName" size="40" title="Enter your first name" required>
                    </div>

                    <div class="form-section">
                        <label>Middle Initial:</label>
                        <input type="text" name="middleInitial" size="1" title="Enter your middle initial if applicable">
                    </div>

                    <div class="form-section">
                        <label>Last Name:</label>
                        <input type="text" name="lastName" size="40" title="Enter your last name" required>
                    </div>

                    <div class="form-section">
                        <label>Date of Birth:</label>
                        <input type="date" name="dateOfBirth" title="Enter your date of birth" required>
                    </div>

                    <div class="form-section">
                        <label>Gender:</label>
                        <select name="gender" title="Select your applicable gender" required>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                            <option value="O">Other</option>
                        </select>
                    </div>

                    <div class="form-section">
                        <label>Phone Number:</label>
                        <input type="text" name="phoneNumber" title="Enter your phone number">
                    </div>

                    <div class="form-section">
                        <label>Home Address:</label>
                        <input type="text" name="homeAddress" size="40" title="Enter your home address" required>
                    </div>

                    <div class="form-section">
                        <label>Email Address:</label>
                        <input type="text" name="email" size="40" title="Enter your email address" required>
                    </div>


                    <div class="form-section <?php echo (!empty($usernameError)) ? 'has-error' : ''; ?>">
                        <label>Username</label>
                        <input type="text" name="username" value="<?php echo $username; ?>" required>
                        <span class="form-warning"><?php echo $usernameError; ?></span>
                    </div>

                    <div class="form-section <?php echo (!empty($passwordError)) ? 'has-error' : ''; ?>">
                        <label>Password</label>
                        <input type="password" name="password1" value="<?php echo $password1; ?>" required>
                        <span class="form-warning"><?php echo $passwordError; ?></span>
                    </div>

                    <div class="form-section <?php echo (!empty($confirmPasswordError)) ? 'has-error' : ''; ?>">
                        <label>Confirm Password</label>
                        <input type="password" name="password2" value="<?php echo $password2; ?>" required>
                        <span class="form-warning"><?php echo $confirmPasswordError; ?></span>
                    </div>

                    <div class="form-section">
                        <input type="submit" class="fancyButton-1" value="Submit">
                        <input type="reset" class="fancyButton-2" value="Reset">
                    </div>
                </form>
                <p>Already Have an account? <a href="login.php" title="Click here to go to the login page" class="link-1">Login here.</a></p>
                
            </div>

        </section>

    </body>
</html>