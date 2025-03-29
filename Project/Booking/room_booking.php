<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Hotel Booking</h1>
        
        <!-- Booking Form -->
        <form id="bookingForm">
            <label for="checkin">Check-in Date:</label>
            <input type="date" id="checkin" name="checkin" required>
            
            <label for="checkout">Check-out Date:</label>
            <input type="date" id="checkout" name="checkout" required>

            <label for="rooms">Select Room:</label>
            <select id="rooms" name="rooms" required>
                <option value="single">Single Room</option>
                <option value="double">Double Room</option>
                <option value="suite">Suite</option>
            </select>

            <label for="dining">Dining Option:</label>
            <select id="dining" name="dining" required>
                <option value="in-room">In-room Dining</option>
                <option value="buffet">Buffet</option>
            </select>

            <label for="event">Event (Meeting/Wedding):</label>
            <select id="event" name="event">
                <option value="none">None</option>
                <option value="meeting">Meeting</option>
                <option value="wedding">Wedding</option>
            </select>

            <label for="products">Additional Products:</label>
            <select id="products" name="products[]" multiple>
                <option value="spa">Spa</option>
                <option value="massage">Massage</option>
                <option value="car-rental">Car Rental</option>
                <option value="tour">Tour</option>
            </select>

            <button type="submit">Book Now</button>
        </form>

        <div id="bookingDetails"></div>
    </div>

    <script src="script.js"></script>
</body>
</html>
