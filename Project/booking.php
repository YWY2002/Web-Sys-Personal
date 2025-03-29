<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIT Hotel</title>
        <?php
            include "inc/head.inc.php";
        ?>
    <link rel="stylesheet" href="assets/css/product.css"> 
    <script src="assets/js/product.js"></script>
</head>
<body>
        <?php
            include "inc/nav.inc.php";
        ?>
    <header>
        <h1>Booking</h1>
    </header>
    <main>
        <section class="booking">
            <div class="room-guest-info">
                <h2>No. of Rooms & Guests</h2>
                <label>Room 1</label>
                <div class="guests">
                    <label>Adults</label>
                    <button class="guest-btn" onclick="adjustGuests('adult', -1)">-</button>
                    <span id="adult-count">1</span>
                    <button class="guest-btn" onclick="adjustGuests('adult', 1)">+</button>
                </div>
                <div class="guests">
                    <label>Children (0-12 years)</label>
                    <button class="guest-btn" onclick="adjustGuests('child', -1)">-</button>
                    <span id="child-count">0</span>
                    <button class="guest-btn" onclick="adjustGuests('child', 1)">+</button>
                </div>

                <form action="booking.php" method="post">
                    <label for="checkin">Check-in Date:</label>
                    <input type="date" id="checkin" name="checkin" required>

                    <label for="checkout">Check-out Date:</label>
                    <input type="date" id="checkout" name="checkout" required>

                    <label for="guests">Number of Guests:</label>
                    <input type="number" id="guests" name="guests" min="1" max="1" required>

                    <button type="submit">Book Now</button>
                </form>

                <div class="book-now">
                    <button onclick="checkAvailability()">Check Availability</button>
                </div>
            </div>
            
        </section>
        <div class="booking-container">
            <div class="calendar">
                <h2>April 2025</h2>
                <div class="calendar-header">
                    <div>Mon</div><div>Tue</div><div>Wed</div><div>Thu</div><div>Fri</div><div>Sat</div><div>Sun</div>
                </div>
                <div class="calendar-body">
                    <div class="day" data-price="1030">1</div>
                    <div class="day" data-price="1780">2</div>
                    <div class="day" data-price="780">3</div>
                    <div class="day" data-price="880">4</div>
                    <div class="day" data-price="880">5</div>
                    <div class="day" data-price="730">6</div>
                    <div class="day" data-price="730">7</div>
                    <div class="day" data-price="680">8</div>
                    <div class="day" data-price="680">9</div>
                    <!-- Add all the days similarly -->
                </div>
            </div>

            
        </div>

    </main>
    <?php
            include "inc/footer.inc.php";
    ?>
</body>
</html>