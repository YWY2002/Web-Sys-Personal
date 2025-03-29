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
        <section class="room-intro">
            <p>Our Standard Single Room offers a comfortable and cozy retreat for solo travelers. 
                Featuring a single bed, work desk, flat-screen TV, and free Wi-Fi, 
                it’s designed to meet your needs whether you're here for business or leisure. 
                Enjoy modern amenities like a mini-fridge, in-room safe, and a private bathroom with essential toiletries. 
                With simple, inviting decor and all the essentials, it's the perfect space to relax and recharge during your stay.
            </p>
            <a href="booking.php">
                <button class="booknow" href="booking.php">BOOK NOW</button>
            </a>


            <div class="splide__track">
                <div class="splide__slides">
                    <ul>
                        <li class="splide__list">
                        <img src="assets/images/Singleroom/Singleroom.jpg" alt="Single Room">
                        </li>
                        <li class="splide__list">
                            <img src="assets/images/Singleroom/Singleroom2.jpg" alt="Single Room">
                        </li>
                        <li class="splide__list">
                            <img src="assets/images/Singleroom/Singleroombath.jpg" alt="Single Room">
                        </li>
                        <li>Flat-screen TV</li>
                        <li>Private Bathroom</li>
                    </ul>
                </div>
            </div>

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