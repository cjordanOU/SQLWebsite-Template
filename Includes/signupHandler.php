<?php
// dbConfig include
require_once 'Includes/dbConfig.php';
 
// Define/Initialize variables
$firstName = "";
$middleInitial = "";
$lastName = "";
$dateOfBirth = "";
$gender = "";
$phoneNumber; // Can be Null
$homeAddress = "";
$email; // Can be Null
$username = "";
$usernameError = "";
$password1 = "";
$password2 = "";
$passwordError = "";
$confirmPasswordError = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    $firstName = trim($_POST["firstName"]);
    $middleInitial = trim($_POST["middleInitial"]);
    $lastName = trim($_POST["lastName"]);
    $dateOfBirth = trim($_POST["dateOfBirth"]);
    $gender = trim($_POST["gender"]);
    $phoneNumber = trim($_POST["phoneNumber"]);
    $homeAddress = trim($_POST["homeAddress"]);
    $email = trim($_POST["email"]);


    // Validate username
    if(empty(trim($_POST["username"]))){
        $usernameError = "Please enter a username.";
    } else{
        //$username = trim($_POST["username"]);
        $usernameCheck = "SELECT MEMBER_ID FROM members WHERE username = ?";

        if($stmt = mysqli_prepare($connection, $usernameCheck)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = trim($_POST["username"]);

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){
                    $usernameError = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    
    // Validate password
    if(empty(trim($_POST["password1"]))){
        $passwordError = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password1"])) < 6){
        $passwordError = "Password must have atleast 6 characters.";
    } else{
        $password1 = trim($_POST["password1"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["password2"]))){
        $confirmPasswordError = "Please confirm password.";     
    } else{
        $password2 = trim($_POST["password2"]);
        if(empty($passwordError) && ($password1 != $password2)){
            $confirmPasswordError = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($usernameError) && empty($passwordError) && empty($confirmPasswordError)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO members (first_name, last_name, middle_initial, dob, gender, phone_number, address, email, username, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($connection, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssssssss", $param_fname, $param_lname, $param_minitial , $param_dob, $param_gender , $param_pnumber, $param_hadress, $param_email, $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password1, PASSWORD_DEFAULT); // Creates a password hash
            $param_fname = $firstName;
            $param_lname = $lastName;
            $param_minitial = $middleInitial;
            $param_dob = $dateOfBirth;
            $param_gender = $gender;
            $param_pnumber = $phoneNumber;
            $param_hadress = $homeAddress;
            $param_email = $email;


            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($connection);
}
?>