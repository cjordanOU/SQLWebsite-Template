<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require('Includes/metadata.php'); ?>

        <title>Template Webpage - Login</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

        <!-- Styles -->
        <link href="style.css" rel="stylesheet">
    </head>

    <body>
        <?php include('Includes/header.php'); ?>

        <section>
            <div class="centered container login-area">
                <h1>Login</h1>
                <form id="loginForm" action="loginProcess.php" method="post">
                    <label>Username:</label>
                    <input type="text" name="username" size="40" title="Enter your username" required>
                    <br>

                    <label>Password:</label>
                    <input type="password" name="password" size="40" title="Enter your username" required>
                    <br>

                    <input type="submit" name="loginSubmit" value="Submit" class="fancyButton-1">
                </form>
            </div>
        </section>
    </body>
</html>