<?php
session_start();

$fname = $lname = $email = $pwd = $pwd_confirm = $errorMsg = "";
$success = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["fname"])) {
        $errorMsg .= "First name is required.<br>";
        $success = false;
    } else {
        $fname = sanitize_input($_POST["fname"]);
    }
    
    if (empty($_POST["lname"])) {
        $errorMsg .= "Last name is required.<br>";
        $success = false;
    } else {
        $lname = sanitize_input($_POST["lname"]);
    }
    
    if (empty($_POST["email"]))
    {
        $errorMsg .= "Email is required.<br>";
        $success = false;
    }
    else
    {
        $email = sanitize_input($_POST["email"]);
    
        // Additional check to make sure e-mail address is well-formed.
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $errorMsg .= "Invalid email format.<br>";
            $success = false;
        }
    }
    
    if (empty($_POST["pwd"])) {
        $errorMsg .= "Password is required.<br>";
        $success = false;
    } else {
        $pwd = $_POST["pwd"];
    }
    
    if (empty($_POST["pwd_confirm"])) {
        $errorMsg .= "Please confirm your password.<br>";
        $success = false;
    } else {
        $pwd_confirm = $_POST["pwd_confirm"];
        if ($pwd !== $pwd_confirm) {
            $errorMsg .= "Passwords do not match.<br>";
            $success = false;
        }
    }
    
    if (empty($_POST["agree"])) {
        $errorMsg .= "You must agree to the terms and conditions.<br>";
        $success = false;
    }

    if ($success) {
        $pwd_hashed = password_hash($pwd, PASSWORD_DEFAULT);
        saveMemberToDB();
    }
    
    if ($success)
    {
        $_SESSION['message'] .= "<h3>Your registration is successful!</h3>";
        $_SESSION['message'] .= "<h4>Thank you for signing up, " . $fname . " " . $lname . ".</h4>";
        $_SESSION['message'] .= "<a href='../#login' class='btn btn-success'>Log-in</a>";
    }
    else
    {
        $_SESSION['message'] .= "<h3>Oops!</h3>";
        $_SESSION['message'] .= "<h4>The following input errors were detected:</h4>";
        $_SESSION['message'] .= "<p>" . $errorMsg . "</p>";
        $_SESSION['message'] .= "<a href='../register.php' class='btn btn-danger'>Return to Sign Up</a>";
    }

    header("Location: register.php");
    exit();
}


/*
* Helper function that checks input for malicious or unwanted content.
*/
function sanitize_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


/*
* Helper function to write the member data to the database.
*/
function saveMemberToDB()
{
    global $fname, $lname, $email, $pwd_hashed, $errorMsg, $success;

    // Create database connection.
    $config = parse_ini_file('/var/www/private/db-config.ini');
    if (!$config)
    {
        $errorMsg = "Failed to read database config file.";
        $success = false;
    }
    else
    {
        $conn = new mysqli(
        $config['servername'],
        $config['username'],
        $config['password'],
        $config['dbname']
        );
        // Check connection
        if ($conn->connect_error)
        {
            $errorMsg = "Connection failed: " . $conn->connect_error;
            $success = false;
        }
        else
        {
            // Prepare the statement:
            $stmt = $conn->prepare("INSERT INTO world_of_pets_members
            (fname, lname, email, password) VALUES (?, ?, ?, ?)");

            // Bind & execute the query statement:
            $stmt->bind_param("ssss", $fname, $lname, $email, $pwd_hashed);
            if (!$stmt->execute())
            {
                $errorMsg = "Execute failed: (" . $stmt->errno . ") " .
                $stmt->error;
                $success = false;
            }
            $stmt->close();
        }

        $conn->close();
    }
}
?>