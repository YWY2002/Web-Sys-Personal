<?php
session_start();

$fname = $lname = $email = $pwd = $errorMsg = "";
$success = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
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

    if ($success) {
        $pwd_hashed = password_hash($pwd, PASSWORD_DEFAULT);
        authenticateUser();
    }
    
    if ($success)
    {
        $_SESSION['message'] .= "<h3>Login successful!</h3>";
        $_SESSION['message'] .= "<h4>Welcome back, " . $fname . " " . $lname . ".</h4>";
        $_SESSION['message'] .= "<a href='../' class='btn btn-success'>Return to Home</a>";
    }
    else
    {
        $_SESSION['message'] .= "<h3>Oops!</h3>";
        $_SESSION['message'] .= "<h4>The following errors were detected:</h4>";
        $_SESSION['message'] .= "<p>" . $errorMsg . "</p>";
        $_SESSION['message'] .= "<a href='../login.php' class='btn btn-warning'>Return to Login</a>";
    }

    header("Location: login.php");
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


function authenticateUser()
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
            $stmt = $conn->prepare("SELECT * FROM world_of_pets_members WHERE email=?");

            // Bind & execute the query statement:
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0)
            {
                // Note that email field is unique, so should only have one row.
                $row = $result->fetch_assoc();
                $fname = $row["fname"];
                $lname = $row["lname"];
                $pwd_hashed = $row["password"];
                
                // Check if the password matches:
                if (!password_verify($_POST["pwd"], $pwd_hashed))
                {
                    // Don’t tell hackers which one was wrong, keep them guessing…
                    $errorMsg = "Email not found or password doesn't match...";
                    $success = false;
                }
            }
            else
            {
                $errorMsg = "Email not found or password doesn't match...";
                $success = false;
            }

            $stmt->close();
        }

        $conn->close();
    }
}
?>