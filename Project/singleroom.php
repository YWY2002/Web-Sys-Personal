<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Room</title>
    <?php
            include "inc/head.inc.php";
        ?>
    <link rel="stylesheet" href="assets/css/product.css"> 
</head>
<body>
    
    <main>
        <div class="room-intropic">
        <img src="assets/images/Singleroom/Singleroom.jpg" alt="Single Room">
        </div>
        <h1 class="room-introtitle">STANDARD SINGLE ROOM</h1>
        <section class="room-details">
            <h2>Room Details</h2>
            <p>Welcome to our cozy single room, perfect for solo travelers. Enjoy a comfortable stay with all the amenities you need.</p>
            <ul>
                <li>Bed: Single</li>
                <li>Free Wi-Fi</li>
                <li>Air Conditioning</li>
                <li>Flat-screen TV</li>
                <li>Private Bathroom</li>
            </ul>
        </section>

        <section class="booking">
            <h2>Book Now</h2>
            <form action="booking.php" method="post">
                <label for="checkin">Check-in Date:</label>
                <input type="date" id="checkin" name="checkin" required>

                <label for="checkout">Check-out Date:</label>
                <input type="date" id="checkout" name="checkout" required>

                <label for="guests">Number of Guests:</label>
                <input type="number" id="guests" name="guests" min="1" max="1" required>

                <button type="submit">Book Now</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Your Hotel Name. All rights reserved.</p>
    </footer>
</body>
</html>