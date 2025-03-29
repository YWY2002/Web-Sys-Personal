<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SIT Hotel - Bookings</title>
        <?php
            include "inc/head.inc.php";
        ?>
    </head>
    
    <body>
        <?php
            include "inc/nav.inc.php";
        ?>
        <main>
            <div class="container-fluid mt-5">
                <?php
                if (isset($_SESSION['cart'])) {
                    include "inc/booking.inc.php";
                } else {
                    echo "<p>Your bookings are currently empty. <a href='index.php'>Browse rooms</a></p>";
                }
                ?>
            </div>
        </main>
        <?php
            include "inc/footer.inc.php";
        ?>
    </body>
</html>