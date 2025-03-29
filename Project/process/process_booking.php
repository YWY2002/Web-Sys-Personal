<?php
session_start();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    global $errorMsg;
    $product_id;
    $room_type = $_POST["roomType"];
    $number_room = $_POST["numberRoom"];
    function checkAvailability($room_type, $number_room)
    {
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
        }
    
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }   
    
        $stmt = $conn->prepare("SELECT product_id FROM products WHERE category = ? AND available = ?");
        $stmt->bind_param("si", $room_type, 1);
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result->num_rows >= $number_room)
        {
            $availability = true;
            $_SESSION["message"] .="<p>Room is available for reservation.</p>";
        }
        else
        {
            $availability = false;
            $_SESSION["message"] .="<p>Room is not available for reservation.</p>";
        }
    
        $stmt->close();
        $conn->close();
    }

    checkAvailability($room_type, $number_room, $checkin_date, $checkout_date);
}

?>