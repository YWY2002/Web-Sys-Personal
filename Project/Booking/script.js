document.getElementById("bookingForm").addEventListener("submit", function(e) {
    e.preventDefault();

    // Getting form data
    const checkin = document.getElementById("checkin").value;
    const checkout = document.getElementById("checkout").value;
    const room = document.getElementById("rooms").value;
    const dining = document.getElementById("dining").value;
    const event = document.getElementById("event").value;
    const products = Array.from(document.getElementById("products").selectedOptions).map(option => option.value);

    // Display booking details
    const bookingDetails = `
        <h2>Booking Details</h2>
        <p><strong>Check-in:</strong> ${checkin}</p>
        <p><strong>Check-out:</strong> ${checkout}</p>
        <p><strong>Room Type:</strong> ${room}</p>
        <p><strong>Dining:</strong> ${dining}</p>
        <p><strong>Event:</strong> ${event}</p>
        <p><strong>Additional Products:</strong> ${products.join(", ") || "None"}</p>
    `;
    document.getElementById("bookingDetails").innerHTML = bookingDetails;
});
