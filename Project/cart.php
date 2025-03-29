<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SIT Hotel - Cart</title>
        <?php
            include "inc/head.inc.php";
            session_start();
        ?>
    </head>
    
    <body>
        <?php
            include "inc/nav.inc.php";
        ?>
        <main>
            <div class="container-fluid mt-5">
                <h2>Cart</h2>
                
                <?php
                if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                    include "inc/cart.inc.php";
                } else {
                    echo "<p>Your cart is currently empty. <a href='index.php'>Browse rooms</a></p>";
                }
                ?>
            </div>
        </main>
        
        <?php
            include "inc/footer.inc.php";
        ?>
    </body>
</html>
