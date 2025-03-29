<?php
session_start();

$product_id = $quantity = $errorMsg = "";
$total_price = $gst = $total_price_gst = 0;
$success = true;

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    
    if (empty($_GET["product_id"]))
    {
        $errorMsg .= "Product not found.<br>";
        $success = false;
    }
    else if (!is_numeric($product_id) || $product_id <= 1) {
        $errorMsg .= "Invalid product.<br>";
        $success = false;
    }
    else
    {
        $product_id = sanitize_input($_GET["product_id"]);
    }

    if (empty($_GET["quantity"]))
    {
        $errorMsg .= "Quantity not found.<br>";
        $success = false;
    }
    else if (!is_numeric($quantity) || $quantity <= 0) {
        $errorMsg .= "Invalid quantity.<br>";
        $success = false;
    }
    else
    {
        $quantity = sanitize_input($_GET["quantity"]);
    }


    if ($success) {
        
        if ($quantity == -1) {
            removeProduct($product_id);
        } else {
            getProduct($product_id, $quantity);
        }

        calculateCart($total_price, $gst, $total_price_gst);
    }
    
}

function sanitize_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function calculateCart(&$total_price, &$gst, &$total_price_gst)
{
    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {

        foreach ($_SESSION['cart'] as $item) {
            $quantity = $item['quantity'];
            $price = $item['price'];
            $total_price += $price * $quantity;
        }

        $gst = $total_price * 0.09;
        $total_price_gst = $total_price + $gst;

        $_SESSION['cart_summary'] = [
            'total_price' => $total_price,
            'gst' => $gst,
            'total_price_gst' => $total_price_gst
        ];
        
    }
}

function removeProduct($product_id)
{
    foreach ($_SESSION['cart'] as $key => $item) {
        
        if ($item['product_id'] == $product_id) {
            unset($_SESSION['cart'][$key]);
            $_SESSION['message'] = $item['product_name'] . " was removed from cart.";
            break;
        }

    }

    // Re-index the array to avoid empty indices
    $_SESSION['cart'] = array_values($_SESSION['cart']);
}

function getProduct($product_id, $quantity)
{
    global $errorMsg, $success;

    // Create database connection
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
            $stmt = $conn->prepare("SELECT * FROM products WHERE product_id = ?");

            // Bind & execute the query statement:
            $stmt->bind_param("i", $product_id);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0)
            {
                // Product found
                $row = $result->fetch_assoc();

                // Initialise cart if not already
                if (!isset($_SESSION['cart'])) {
                    $_SESSION['cart'] = [];
                }

                $productExists = false;

                // Check if already in cart
                foreach ($_SESSION['cart'] as &$item) {
                    if ($item['product_id'] === $row['product_id']) {
                        
                        // Product exists, update the quantity
                        $item['quantity'] += $quantity;
                        $productExists = true;
                        break;
                    }
                }

                // If product does not exist
                if (!$productExists) {
                    $cart_item = [
                        'product_id' => $row['product_id'],
                        'product_name' => $row['product_name'],
                        'price' => $row['price'],
                        'quantity' => $quantity
                    ];

                    $_SESSION['cart'][] = $cart_item;
                }

                $_SESSION['message'] .= "Product successfully added to cart. <a href='cart.php'>Go to cart</a>";
                $success = true;
            } else {
                $errorMsg = "Product not found.";
                $success = false;
            }

            $stmt->close();
        }

        $conn->close();
    }
}
?>